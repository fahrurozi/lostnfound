<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    //
    protected $table = 'reports';
    protected $primaryKey = 'id';

    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
