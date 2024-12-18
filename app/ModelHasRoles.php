<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class ModelHasRoles extends Model
{
    use HasRoles;
    protected $fillable = [
        'role_id',
        'model_type',
        'model_id'
    ];
    public $timestamps = false;
}
