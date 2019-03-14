<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use\DB;

class Foods extends Model {

	protected $table = 'foods';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id','food_name', 'food_cate', 'food_desc', 'food_price', 'food_img'];

	public static function foodsSearch($keyword, $paginate){
    	return Foods::where('food_name', 'like', '%' . $keyword . '%')->orWhere('food_name', 'like','%' . $keyword . '%')->paginate($paginate);
    }

    public static function food_cate_details($id){
    	return DB::table('foods')->where('food_cate', $id)->get();
    }

    public function category(){
    	return $this->belongsTo('App\Categories', 'food_cate', 'id');
    }

    public function comments(){
    	return $this->hasMany('App\Comment');
    }

}
