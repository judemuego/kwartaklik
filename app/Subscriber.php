<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subscriber extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'subscription_type_id',
        'firstname',
        'middlename',
        'lastname',
        'referral_code',
        'contact_number',
        'bio',
        'birthday',
        'occupation',
        'gender',
        'complete_address',
        'house_no',
        'street',
        'region_id',
        'province_id',
        'city_id',
        'barangay_id',
        'zip_code',
        'total_points',
        'total_withdrawal',
        'total_spend',
        'status',
        'created_by',
        'updated_by'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function badge()
    {
        return $this->hasMany(SubscriberBadge::class, 'subscriber_id');
    }
}
