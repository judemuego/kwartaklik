<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubscriberBadge extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'subscriber_id',
        'badge_id',
        'earned_at',
        'created_by',
        'updated_by'
    ];

    public function badge()
    {
        return $this->belongsTo(Badge::class, 'badge_id');
    }
}
