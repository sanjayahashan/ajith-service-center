<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Appointment extends Eloquent
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
