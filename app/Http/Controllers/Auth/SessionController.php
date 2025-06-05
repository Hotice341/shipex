<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SessionController extends Controller
{
    /**
     * @param $sessionId
     * @return RedirectResponse
     */
    public function logoutSession($sessionId): RedirectResponse
    {
        // Delete the session with the given ID from the `sessions` table
        DB::table('sessions')->where('id', $sessionId)->delete();

        // If the deleted session is the current session, log the user out
        if ($sessionId === session()->getId()) {
            Auth::logout();
        }

        // Redirect back to the previous page with a success message
        return redirect()->back()->with('success', 'Session logged out successfully.');
    }

    /**
     * @return RedirectResponse
     */
    public function logoutAllSessions(): RedirectResponse
    {
        // Get the ID of the currently authenticated user
        $userId = Auth::id();

        // Delete all sessions for the authenticated user from the `sessions` table
        DB::table('sessions')->where('user_id', $userId)->delete();

        // Log the user out
        Auth::logout();

        // Redirect back to the previous page with a success message
        return redirect()->back()->with('success', 'All sessions logged out successfully.');
    }
}
