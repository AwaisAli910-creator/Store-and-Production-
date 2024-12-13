<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminRawmaterial extends Model
{
    use HasFactory;
    public $table = 'rawmaterial';
    protected $guarded = ['id','created_at','updated_at'];
}
