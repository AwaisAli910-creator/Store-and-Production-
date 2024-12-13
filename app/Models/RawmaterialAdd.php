<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RawmaterialAdd extends Model
{
    use HasFactory;

    protected $table='rawmaterialadd';
    protected $guarded = ['id','created_at','updated_at'];

   

}


  