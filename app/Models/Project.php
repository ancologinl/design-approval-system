<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Design;
use App\Models\Notification;

class Project extends Model
{
    protected $fillable = [
        'client_name',
        'unique_link',
        'status',
        'deadline',
        'expected_delivery',
    ];

    protected $casts = [
        'deadline' => 'datetime',
        'expected_delivery' => 'datetime',
    ];

    public function designs(): HasMany
    {
        return $this->hasMany(Design::class);
    }

    public function notifications(): HasMany
    {
        return $this->hasMany(Notification::class);
    }
}
