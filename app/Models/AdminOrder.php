<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminOrder extends Model
{
    use HasFactory;
    public $table = 'order';
    protected $guarded = ['id','created_at','updated_at'];
}

