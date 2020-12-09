<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

/**
 * Class Product
 *
 * @package App\Models
 *
 * @property integer $sku
 * @property string $name
 * @property integer $slug
 * @property string $description
 * @property integer $price_user
 * @property integer $price_3_opt
 * @property integer $price_8_opt
 * @property integer $price_dealer
 * @property integer $price_vip
 * @property integer $category_id
 * @property integer $stock
 */
class Product extends Model
{
    use HasFactory;

	/**
	 * @var string[]
	 */
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

	/**
	 * @var array
	 */
	protected $casts = [
		'sku' => 'integer',
		'name' => 'string',
		'slug' => 'string',
		'description' => 'string',
		'price_user' => 'integer',
		'price_3_opt' => 'integer',
		'price_8_opt' => 'integer',
		'price_dealer' => 'integer',
		'price_vip' => 'integer',
		'category_id' => 'integer',
		'stock' => 'integer',
	];

	/**
	 * @param $value
	 * @return string
	 */
    public function getNameAttribute($value){
    	return strtoupper($value);
    }

	/**
	 * @param $value
	 * @return float|int
	 */
    public function getPriceUserAttribute($value){
    	return $value * 10;
    }

	/**
	 * @return float|int
	 */
    public function getFullAmountPriceAttribute(){
    	return $this->stock * $this->price_vip;
    }

//    public function setNameAttribute($value){
//    	$this->attributes['name'] = Hash::make($value);
//    }

//    public function getPrice3OptAttribute($value){
//    	return $value * 100;
//    }

//	protected $guarded = [];

}
