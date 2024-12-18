<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubscriptionType extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'percentage',
        'status',
        'created_by',
        'updated_by',
    ];
}
