<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BookingRequest extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'from_location',
        'destination_id',
        'vehicle_type_id',
        'journey_date',
        'journey_time',
        'passengers',
        'message',
        'status',
    ];

    protected $casts = [
        'journey_date' => 'date',
        'journey_time' => 'datetime:H:i',
    ];

    public function destination(): BelongsTo
    {
        return $this->belongsTo(Destination::class);
    }

    public function vehicleType(): BelongsTo
    {
        return $this->belongsTo(VehicleType::class);
    }
}
