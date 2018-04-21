<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
     //Table name
     protected $table='roles';
     //primary key
     public $primaryKey='id';
     //Timestamps
     public $timestamps=true;
}
