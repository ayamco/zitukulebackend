<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testing extends Model
{
     //Table name
     protected $table='testings';
     //primary key
     public $primaryKey='id';
     //Timestamps
     public $timestamps=true;
}
