<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Carts extends Model {

	protected $table = 'carts';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */

	 public function order(){
    	return $this->belongsTo('App\Orders','id_order', 'id_cart');
    }

}
