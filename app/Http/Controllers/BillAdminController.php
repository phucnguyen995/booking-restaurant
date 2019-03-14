<?php namespace App\Http\Controllers;
use DB;
use Request;
use App\Http\Controllers\Controller;
use App\Bill;
use App\BillDetails;

class BillAdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index($id = "index-admin")
	{
		$data['user'] = DB::table('users')->get();
		$data['foods'] = Foods::orderBy('id', 'desc')->paginate(10);
		$data['category'] = Categories::all();
		return view('food-admin.'.$id, ['data'=>$data]);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function delete_bill($id)
	{
		Bill::find($id)->delete();
		return redirect('food-admin/manage-bills');
	}

	public function getAllBillDetails($id)
    {
    	$billDetail = BillDetails::where('bill_id', '=',$id)->get();
    	return view('food-admin.bill-detail', ['billDetail' => $billDetail]);
    }

}
