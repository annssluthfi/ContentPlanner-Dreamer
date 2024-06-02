<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planner extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'platforms',
        'goals',
        'idea',
        'content_pillar',
        'type',
        'status',
        'progress',
        'visual',
        'visual_det',
        'caption',
        'hastag',
        'date'
    ];
}
