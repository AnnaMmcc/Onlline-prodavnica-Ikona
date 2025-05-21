<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'user_id',
        'status',
        'total_price',
        'payment_method',
    ];


    public function user()
    {
      return $this->belongsTo(User::class);
    }
    public function items()
    {
        return $this->belongsToMany(IconsModel::class, 'order_items', 'order_id', 'product_id')
            ->withPivot('quantity', 'price')
            ->withTimestamps();
    }

}
