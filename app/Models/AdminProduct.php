<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminProduct extends Model
{
    use HasFactory;
    public $table = 'product';
    protected $guarded = ['id','created_at','updated_at'];
}
