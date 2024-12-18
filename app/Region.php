<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public function voter()
    {
        return $this->hasOne(User::class);
    }
}
