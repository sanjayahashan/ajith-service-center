<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Message extends Eloquent
{
    protected $fillable = [
        'name', 'email', 'phone','subject','message',
    ];
}
