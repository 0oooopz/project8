<?php

namespace App\Models;

use App\Models\Traits\Pagination;
use App\Models\Traits\Search;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


/**
 * Class Product
 *
 * @package App\Models
 *
 * @property integer $sku
 * @property string $name
 * //* @property integer $slug
 * @property string $description
 * @property integer $price_user
 * @property integer $price_3_opt
 * @property integer $price_8_opt
 * @property integer $price_dealer
 * @property integer $price_vip
 * @property integer $category_id
 * @property integer $stock
 * @property boolean $sale
 *
 * @property Category $category
 */
class Product extends Model {
	use HasFactory, Pagination, Search;

	/**
	 * @var string
	 */
	protected $table = 'products';

	/**
	 * @var string[]
	 */
	protected $fillable = [
		'sku',
		'name',
//			'slug',
		'description',
		'price_user',
		'price_3_opt',
		'price_8_opt',
		'price_dealer',
		'price_vip',
		'category_id',
		'stock',
		'sale',
	];

	/**
	 * @var array
	 */
	protected $casts = [
		'sku' => 'integer',
		'name' => 'string',
//		'slug' => 'string',
		'description' => 'string',
		'price_user' => 'integer',
		'price_3_opt' => 'integer',
		'price_8_opt' => 'integer',
		'price_dealer' => 'integer',
		'price_vip' => 'integer',
		'category_id' => 'integer',
		'stock' => 'integer',
		'sale' => 'boolean',
	];

//	protected $perPage = 20;
	private $searchFields = [
		'name',
	];
	/**
	 * @var string[]
	 */
	protected $width = [
		'picture',
		'category',
	];

	/**
	 * @param $value
	 * @return string
	 */
//	public function getNameAttribute($value) {
//		return strtoupper($value);
//	}

	/**
	 * @param $value
	 * @return float|int
	 */
	public function getPriceUserAttribute($value) {
		return $value * 10;
	}

	/**
	 * @return float|int
	 */
	public function getFullAmountPriceAttribute() {
		return $this->stock * $this->price_vip;
	}

	public function setNameAttribute($value) {
		$this->attributes['name'] = $value;
		$this->attributes['slug'] = Str::slug($value);
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function picture() {
		return $this->hasOne(Picture::class);
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function category() {
		return $this->belongsTo(Category::class, 'category_id', 'id');
	}

	/**
	 * @param Request $request
	 * @return LengthAwarePaginator
	 */
	public function getAll(Request $request): LengthAwarePaginator {

//		$query = $this->query();
//		if(isset($request->search)){
//				$asd = $query->where('name','like',"%$request->search%");
//			dump($query->get());
//		}
//		return $this->paginate($asd);
		return $this->addPagination($this->addSearch($this->with('category'),
			$request->query()),
			$request->query());
	}


}

//
///**
// * @param Request $request
// * @return LengthAwarePaginator
// */
//public function getAll(Request $request): LengthAwarePaginator {
//
//	return $this->addPagination($this->addSearch($this->with('user'),
//		$request->query()),
//		$request->query());
//}