<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

	use DB;

	use App\User;

	use App\Foods;

	use App\Comment;

	use Auth;

class CommentController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id = "index-admin")
	{
		$data['user'] = DB::table('users')->get();
		$data['comment'] = DB::table('comments')->get();
		$data['foods'] = Foods::orderBy('id', 'desc')->paginate(10);
		$data['category'] = Categories::all();
		return view('food-admin.'.$id, ['data'=>$data]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function add_comment($id, Request $request)
	{
		$foods = Foods::where('id', $id)->first();
		$comment = new Comment();
		$comment->food_id = $foods->id;
		$comment->name = $request->name;
		$comment->email = $request->email;
		$comment->content = $request->comment;
		$comment->save();
		// Session::flash('success','Comment was added');
		return redirect()->route('food-details', $id);

	}

	public function getListCmt()
    {
        $cmt = Comment::all();
        return view('food-admin.manage-comment', ['comment' => $cmt]);
    }

    public function delete_comment($id)
	{
		Comment::find($id)->delete();
        return redirect('food-admin/manage-comment');
	}

}
