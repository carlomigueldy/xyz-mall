<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function position()
    {
        return $this->belongsTo('App\Position');
    }

    public function department()
    {
        return $this->belongsTo('App\Department');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
