<?php namespace App\Http\Controllers;

	use DB;

	use App\User;

	use App\Bill;

	use App\Foods;

	use App\Booking;

	use App\Categories;

	use Request;

	use App\Http\Controllers\Controller;

	use League\Flysystem\Filesystem;

	use Symfony\Component\HttpFoundation\File\UploadedFile;



class FoodAdminController extends Controller {

		/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */

	public function __construct()
	{
		$this->middleware('auth');

		$bills = Bill::all();
    		
    	view()->share('bills', $bills);

		$category = Categories::all();

		$keySearch = Request::input('keySearch');
	
    	$fResult = Foods::foodsSearch($keySearch, 5);

		view()->share('fResult', $fResult);

		view()->share('cates', $category);	
	}


	public function index($id = "index-admin")
	{
		$data['user'] = DB::table('users')->get();
		$data['foods'] = Foods::orderBy('id', 'desc')->paginate(10);
		$data['category'] = Categories::all();
		return view('food-admin.'.$id, ['data'=>$data]);
	}


	// Food (Add, edit, Del) ========================
	public function edit_food($id)
	{
		$foodById = Foods::find($id);
		return view('food-admin.edit-food', ['foodByID' => $foodById]);
	}

	public function update_food()
	{
		$foods = Request::all();

         if (Request::file('file') != null)
         {
	         // Lấy tên file
	         $file = $foods['file'];
	         //$fileName = $file->getClientOriginalName();
	           
			// File này có thực, bắt đầu đổi tên và move
			$fileExtension = $file->getClientOriginalExtension(); // Lấy . của file
			
			// Filename để khỏi bị trùng
			$fileName = time() . "_" . rand(0,9999) . "_" . md5(rand(0,9999)) . "." . $fileExtension;
						
			// Thư mục upload
			$uploadPath = public_path('/img/foods'); // Thư mục upload
			
			// Bắt đầu chuyển file vào thư mục
			
			Request::file('file')->move($uploadPath,$fileName);

			$food_name = $foods['food_name'];
			$food_cate = $foods['food_cate'];
			$food_desc = $foods['food_desc'];
			$food_price = $foods['food_price'];

			$foodById = Foods::find($foods['id']);
			$foodById->food_name = $food_name;
			$foodById->food_desc = $food_desc;
			$foodById->food_cate = $food_cate;
			$foodById->food_price = $food_price;
			$foodById->food_img = $fileName;

			$foodById->save();
		}
		else
		{
			$food_name = $foods['food_name'];
			$food_cate = $foods['food_cate'];
			$food_desc = $foods['food_desc'];
			$food_price = $foods['food_price'];

			$foodById = Foods::find($foods['id']);
			$foodById->food_name = $food_name;
			$foodById->food_desc = $food_desc;
			$foodById->food_cate = $food_cate;
			$foodById->food_price = $food_price;

			$foodById->save();
		}

		return redirect('food-admin/manage-foods');
	}

	public function delete_food($id)
	{
		Foods::find($id)->delete();
		return redirect('food-admin/manage-foods');
	}

	public function create_food()
	{
		return view('food-admin.add-food');
	}
	public function add_food()
	{
		$foods = Request::all();
         // Lấy tên file
         $file = $foods['file'];
         //$fileName = $file->getClientOriginalName();
           
		// File này có thực, bắt đầu đổi tên và move
		$fileExtension = $file->getClientOriginalExtension(); // Lấy . của file
		
		// Filename để khỏi bị trùng
		$fileName = time() . "_" . rand(0,9999) . "_" . md5(rand(0,9999)) . "." . $fileExtension;
					
		// Thư mục upload
		$uploadPath = public_path('/img/foods'); // Thư mục upload
		
		// Bắt đầu chuyển file vào thư mục
		
		Request::file('file')->move($uploadPath,$fileName);
       
        $food_name = $foods['food_name'];
		$food_cate = $foods['food_cate'];
		$food_desc = $foods['food_desc'];
		$food_price = $foods['food_price'];

		Foods::insert([
			'food_name'=> $food_name,
			'food_cate'=> $food_cate,
			'food_desc'=> $food_desc,
			'food_price'=> $food_price,
			'food_img'=> $fileName,
		]);
		return redirect('food-admin/manage-foods');
	}

	//End Food (Add, edit, del) ===================

	public function search()
	{
		return view('food-admin/admin-search');
	}

	// Category (Add , edit, del) =================

	public function create_category()
	{
		return view('food-admin.add-category');
	}
	public function add_category()
	{
		$cates = Request::all();
         // Lấy tên file
         $file = $cates['file'];
         //$fileName = $file->getClientOriginalName();
           
		// File này có thực, bắt đầu đổi tên và move
		$fileExtension = $file->getClientOriginalExtension(); // Lấy . của file
		
		// Filename để khỏi bị trùng
		$fileName = time() . "_" . rand(0,999) . "_" . md5(rand(0,999)) . "." . $fileExtension;
					
		// Thư mục upload
		$uploadPath = public_path('/img/category'); // Thư mục upload
		
		// Bắt đầu chuyển file vào thư mục
		
		Request::file('file')->move($uploadPath,$fileName);
       
        $cate_name = $cates['cate_name'];
		$cate_desc = $cates['cate_desc'];

		Categories::insert([
			'cate_name'=> $cate_name,
			'cate_desc'=> $cate_desc,
			'cate_img'=> $fileName,
		]);
		return redirect('food-admin/manage-categories');
	}

	public function delete_category($id)
	{
		Categories::find($id)->delete();
		return redirect('food-admin/manage-categories');
	}

	public function edit_category($id)
	{
		$cateById = Categories::find($id);
		return view('food-admin.edit-category', ['cateById' => $cateById]);
	}

	public function update_category()
	{
		$cates = Request::all();

         if (Request::file('file') != null)
         {
	         // Lấy tên file
	         $file = $cates['file'];
	         //$fileName = $file->getClientOriginalName();
	           
			// File này có thực, bắt đầu đổi tên và move
			$fileExtension = $file->getClientOriginalExtension(); // Lấy . của file
			
			// Filename để khỏi bị trùng
			$fileName = time() . "_" . rand(0,999) . "_" . md5(rand(0,999)) . "." . $fileExtension;
						
			// Thư mục upload
			$uploadPath = public_path('/img/category'); // Thư mục upload
			
			// Bắt đầu chuyển file vào thư mục
			
			Request::file('file')->move($uploadPath,$fileName);

			$cate_name = $cates['cate_name'];
			$cate_desc = $cates['cate_desc'];

			$cateById = Categories::find($cates['id']);
			$cateById->cate_name = $cate_name;
			$cateById->cate_desc = $cate_desc;
			$cateById->cate_img = $fileName;

			$cateById->save();
		}
		else
		{
			$cate_name = $cates['cate_name'];
			$cate_desc = $cates['cate_desc'];

			$cateById = Categories::find($cates['id']);
			$cateById->cate_name = $cate_name;
			$cateById->cate_desc = $cate_desc;

			$cateById->save();
		}

		return redirect('food-admin/manage-categories');
	}
	// End Category (Add , edit, del) =================
	public function getBooking()
	{
		$book = Booking::all();
		if(Request::get('id') && Request::get('confirm') == 'no')
		{
			$bookByID = Booking::find(Request::get('id'));
			$bookByID->confirm = 0;
			$bookByID->save();
			return redirect('food-admin/manage-booking');
		}
		if(Request::get('id') && Request::get('confirm') == 'yes')
		{
			$bookByID = Booking::find(Request::get('id'));
			$bookByID->confirm = 1;
			$bookByID->save();
			return redirect('food-admin/manage-booking');
		}
		return view('food-admin/manage-booking', ['book' => $book]);
	}

	public function delete_booking($id)
	{
		Booking::find($id)->delete();
		return redirect('food-admin/manage-booking');
	}
}
