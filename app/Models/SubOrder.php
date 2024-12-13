<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubOrder extends Model
{
    use HasFactory;
    public $table = 'suborder';
    protected $guarded = ['id','created_at','updated_at'];
}
