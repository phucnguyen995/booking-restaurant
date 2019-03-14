<?php namespace App;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\Model;
use\DB;

class Booking extends Model {

	protected $table = 'booking';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */

    public function user(){
    	return $this->belongsTo('App\User');
    }

}