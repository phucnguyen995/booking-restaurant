<?php namespace App;

	use Illuminate\Support\Facades\Schema;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Database\Migrations\Migration;
	use Illuminate\Database\Eloquent\Model;
	use\DB;

	use App\User;

	use App\Foods;

	use Request;
class Comment extends Model {

	protected $table = 'comments';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */

	protected $primaryKey = 'id';

    public function food(){
    	return $this->belongsTo('App\Foods', 'food_id', 'id');
    }
}
