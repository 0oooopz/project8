<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
			'sku',
      'name',
			'slug',
      'description',
			'price_user',
			'price_3_opt',
			'price_8_opt',
			'price_dealer',
			'price_vip',
			'category_id',
			'stock',
    ];

	protected $guarded = [];
}
