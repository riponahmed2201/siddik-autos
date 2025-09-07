<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class VehicleType extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'capacity',
        'is_active',
        'image_path'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function pricing(): HasMany
    {
        return $this->hasMany(Pricing::class);
    }
}
