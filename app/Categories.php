<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model {

	protected $table = 'categories';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id','cate_name', 'cate_img', 'cate_desc'];

	protected $primaryKey = 'id';

	public function food_category() {
		return $this->hasMany('App\Foods', 'food_cate', 'id');
	}

}
