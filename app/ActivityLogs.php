<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ActivityLogs extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'user_id',
        'activity_type',
        'details'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
