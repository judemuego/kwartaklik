<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PointingSystem extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'activity', 
        'activity_type', 
        'coins_earned', 
        'description', 
        'is_recurring', 
        'expires_at', 
        'status', 
        'created_by', 
        'updated_by'
    ];
}
