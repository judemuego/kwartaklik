<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notification extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'message',
        'status',
        'date_time',
        'type',
        'created_by',
        'updated_by'
    ];

    protected $table = 'notifications';
}
