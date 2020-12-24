<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'user_id',
        'template_id',
        'collection_id',
        'product_name',
        'slug',
        'product_description',
        'product_image',
        'product_display_image',
        'product_price',
        'sale_price',
        'stock_qty',
        'shipping_weight',
        'shipping_length',
        'shipping_width',
        'shipping_height',
    ];
}
