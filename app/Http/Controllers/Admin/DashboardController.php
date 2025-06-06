<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\TestEmailNotification;
use App\Models\Shipment;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Jenssegers\Agent\Agent;
use Mail;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Initialize query
        $query = Shipment::query();

        // Handle search
        if ($search = $request->query('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('tracking_code', 'like', "%{$search}%")
                    ->orWhere('sender_name', 'like', "%{$search}%")
                    ->orWhere('receiver_name', 'like', "%{$search}%");
            });
        }

        // Handle sort
        $sort = $request->query('sort', 'newest');
        $order = $sort === 'oldest' ? 'asc' : 'desc';
        $query->orderBy('created_at', $order);

        // Get paginated shipments
        $shipments = $query->paginate(10)->appends(['search' => $search, 'sort' => $sort]);

        return view('admin.dashboard', [
            'shipments' => $shipments
        ]);
    }

    /**
     * Show Profile Page
     */
    public function profilePage()
    {
        // Fetch active sessions
        $sessions = DB::table('sessions')
            ->where('user_id', auth()->user()->id)
            ->get();

        $agent = new Agent();
        $activeSessions = [];

        foreach ($sessions as $session) {
            $agent->setUserAgent($session->user_agent);

            $activeSessions[] = [
                'id' => $session->id,
                'ip_address' => $session->ip_address,
                'device' => $agent->device(),
                'platform' => $agent->platform(),
                'browser' => $agent->browser(),
                'last_activity' => Carbon::createFromTimestamp($session->last_activity)->diffForHumans(),
                'is_current' => $session->id === session()->getId(),
            ];
        }

        return view('admin.settings', [
            'activeSessions' => $activeSessions,
        ]);
    }

    /**
     * Updates Account Information
     *
     * @param Request $request
     * @return JsonResponse|RedirectResponse
     */
    public function updateProfile(Request $request): JsonResponse|RedirectResponse
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.auth()->user()->id,
        ]);

        if ($validator->fails()) {
            return $request->wantsJson()
                ? response()->json(['errors' => $validator->errors()], 422)
                : redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            // Update the admin's profile
            auth()->user()->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
            ]);

            return $request->wantsJson()
                ? response()->json(['status' => 'success', 'message' => 'Your account details have been updated successfully.'])
                : redirect()->back()->with('success', 'Your account details have been updated successfully.');

        } catch (Exception) {
            return $request->wantsJson()
                ? response()->json(['status' => 'error', 'message' => 'Failed to update profile'], 500)
                : redirect()->back()->with('error', 'Failed to update profile');
        }
    }

    /**
     * Update the user's password.
     *
     * @param Request $request
     * @return JsonResponse|RedirectResponse
     */
    public function updatePassword(Request $request): JsonResponse|RedirectResponse
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'current_password' => 'required|string',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|string|min:8',
        ], [
            'current_password.required' => 'Current password is required.',
            'password.required' => 'New password is required.',
            'password.min' => 'Password must be at least 8 characters.',
            'password.confirmed' => 'Password confirmation does not match.',
        ]);

        if ($validator->fails()) {
            return $request->wantsJson()
                ? response()->json(['errors' => $validator->errors()], 422)
                : redirect()->back()->withErrors($validator)->withInput();
        }

        // Verify the current password
        if (!Hash::check($request->input('current_password'), auth()->user()->password)) {
            return $request->wantsJson()
                ? response()->json(['errors' => ['current_password' => ['The current password is incorrect.']]], 422)
                : redirect()->back()->with('error', 'The current password is incorrect.')->withInput();
        }

        // Update the user's password
        auth()->user()->update([
            'password' => Hash::make($request->input('password')),
        ]);

        // Return appropriate response
        return $request->wantsJson()
            ? response()->json(['status' => 'success', 'message' => 'Your password has been updated successfully.'])
            : redirect()->back()
                ->with('success', 'Your password has been updated successfully.');
    }

    /**
     * Sends a test email to verify email configuration
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function sendTest(Request $request): RedirectResponse
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255'
        ], [
            'email.email' => 'Please enter a valid email address'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {

            // Send email
            if (config('settings.email_notification')) {
                // Send test email
                Mail::mailer(config('settings.email_provider'))->to($request->input('email'))
                    ->send(new TestEmailNotification($request->input('email')));
            }

            return redirect()->back()->with('success', 'Test email sent successfully to: ' . $request->input('email'));
        } catch (Exception $e) {
            logger()->error('Failed to send test email: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to send test email: '.$e->getMessage());
        }
    }

    /**
     * Logout the admin user.
     */
    public function logout(Request $request): RedirectResponse
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->flush(); // Clears all session data
        $request->session()->regenerateToken();

        $redirectUrl = route('login');

        // Redirect to the login page after logout
        return redirect($redirectUrl)->with('success', __('You have been logged out successfully.'));
    }
}
