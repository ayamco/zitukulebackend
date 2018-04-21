<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    //Table name
    protected $table='organisations';
    //primary key
    public $primaryKey='id';
    //Timestamps
    public $timestamps=true;

    public function user(){
        return $this->hasMany('App\User');
    }
}
