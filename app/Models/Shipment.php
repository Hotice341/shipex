<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * @method static create(array $validated)
 * @method static orderBy(string $string, string $string1)
 * @method static count()
 */
class Shipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'tracking_code',
        'sender_name',
        'sender_email',
        'sender_address',
        'receiver_name',
        'receiver_email',
        'receiver_address',
        'origin',
        'destination',
        'shipment_type',
        'payment_mode',
        'shipped_via',
        'departure_date',
        'arrival_date',
        'status',
        'notify_receiver',
        'comments',
    ];

    protected $casts = [
        'departure_date' => 'date',
        'arrival_date' => 'date',
    ];

    /**
     * Generate a unique tracking code.
     */
    public static function generateTrackingCode(): string
    {
        do {
            $code = Str::upper(Str::random(12)); // e.g., "X7B4P8Q9R2T1"
        } while (self::where('tracking_code', $code)->exists());

        return $code;
    }
}
