<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'total_price',
        'first_name',
        'last_name',
        'type',
        'price',
        'country',
        'city',
        'zip',
        'phone',
        'email',
        'tax',
        'comment',
    ];

    public function OrderDetails(){
        return $this->HasMany(OrderDetail::class ,'order_id');
    }
}
