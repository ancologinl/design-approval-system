<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Project;

class Design extends Model
{
    protected $fillable = [
        'project_id',
        'file_path',
        'dimensions',
        'quantity',
        'notes',
        'approval_status',
        'rejection_reason',
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
