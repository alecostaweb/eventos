<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Turma extends Model
{
    public function curso()
    {   
        return $this->belongsTo('App\Curso');
    }
    public function subscriptions()
    {   
        return $this->hasMany('App\Subscription');
    }


}
