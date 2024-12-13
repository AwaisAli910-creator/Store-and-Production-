<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rawmaterialout extends Model
{
    use HasFactory;
    protected  $table= 'rawmaterialout';
    protected $guarded =['id','created_at','updated_at'];
}
