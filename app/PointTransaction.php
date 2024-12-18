<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PointTransaction extends Model
{
    protected $fillable = [
        'subscriber_id', 
        'type', 
        'transactionable_type', 
        'transactionable_id', 
        'amount', 
        'description', 
        'created_by', 
        'updated_by'
    ];
}
