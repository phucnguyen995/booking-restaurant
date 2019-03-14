<?php namespace App;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\Model;
use\DB;

class BillDetails extends Model {

	protected $table = 'bill_details';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */

	protected $primaryKey = 'id';

    public function bills(){
    	return $this->hasMany('App\Bill', 'bill_id', 'id');
    }

    public function food(){
    	return $this->belongsTo('App\Foods', 'food_id', 'id');
    }

}
