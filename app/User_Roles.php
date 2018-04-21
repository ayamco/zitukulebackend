<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Roles extends Model
{
   //Table name
   protected $table='user_roles';
   //primary key
   public $primaryKey='id';
   //Timestamps
   public $timestamps=true;
}
