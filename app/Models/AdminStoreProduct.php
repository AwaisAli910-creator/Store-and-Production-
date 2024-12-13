<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminStoreProduct extends Model
{
    use HasFactory;
    public $table = 'storeproduct';
    protected $guarded = ['id','created_at','updated_at'];
}
