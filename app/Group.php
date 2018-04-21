<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Group extends Model
{
       //Table name
       protected $table='groups';
       //primary key
       public $primaryKey='id';
       //Timestamps
       public $timestamps=true;
}
