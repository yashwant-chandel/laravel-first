<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table = 'orders';

    public function order_meta(){
        return $this->hasMany(order_meta::class,'order_id','id');
    }
    public function users(){
        return $this->hasOne(admin::class,'id','userid');
    }
}
