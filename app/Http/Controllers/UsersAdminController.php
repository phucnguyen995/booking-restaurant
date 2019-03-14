<?php namespace App\Http\Controllers;
use DB;
use Request;
use App\Http\Controllers\Controller;
use App\User;

class UsersAdminController extends Controller {

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
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit_user($id)
	{

		$userById = User::find($id);
		return view('food-admin.edit-user', ['userById' => $userById]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update_user($id)
	{
		$users = Request::all();
		//var_dump($users);
        $user_name = $users['user_name'];
		$user_email = $users['user_email'];
		$user_gender = $users['user_gender'];
		$user_phone = $users['user_phone'];

		$userById = User::find($users['id']);
		$userById->name = $user_name;
		$userById->email = $user_email;
		$userById->gender = $user_gender;
		$userById->phone = $user_phone;

		$userById->save();
		return redirect('food-admin/manage-users');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function delete_user($id)
	{
		User::find($id)->delete();
		return redirect('food-admin/manage-users');
	}

}
