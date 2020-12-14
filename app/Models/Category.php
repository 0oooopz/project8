<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model {
	use HasFactory;

	/**
	 * @var string
	 */
	protected $table = 'categories';

//* @property Products[]|Collection $products

	/**
	 * @var array
	 */
	protected $guarded = [];

	/**
	 * @var string[]
	 */
	protected $with = [
		'products',
	];

//    public function getRouteKeyName() {
//    	return 'slug';
//    }

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function products() {
		return $this->hasMany(Product::class, 'category_id', 'id');
	}
}
