<?php namespace App\Http\Controllers;

	use DB;

	use App\Categories;

	use App\User;

	use App\Bill;

	use App\BillDetails;

	use App\Foods;

	use App\Booking;

	use App\Comment;

	use Request;

	use Cart;

	use Auth;

class FoodController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Food Controller
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
		$this->middleware('guest');	

		$category = Categories::all();

		$keySearch = Request::input('keySearch');
	
    	$fResult = Foods::foodsSearch($keySearch, 5);

    	if (Auth::check()) {

    		$bills = Bill::where('user_id', '=', Auth::user()->id)->get();

    		$book = Booking::where('user_id', '=', Auth::user()->id)->get();
    		
    		view()->share('book', $book);
    		
    		view()->share('bills', $bills);
    	}	
		view()->share('cates', $category);
		view()->share('fResult', $fResult);
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */

	public function index($id = "index")
	{	
		$data['category'] = Categories::all();
		
		if (Request::get('filter') == 'price_asc') {
	       $data['foods'] = Foods::orderBy('food_price', 'ASC')->get();
	    }
	    elseif (Request::get('filter') == 'price_desc') {
	    	$data['foods'] = Foods::orderBy('food_price', 'DESC')->get();
	    }
	    else
	    {
	    	$data['foods'] = Foods::all();
	    }
		return view('booking-food.'.$id, ['data' => $data]);
	}

	public function details($id)
	{
		$cmt = Comment::where('food_id', $id)->get();
		$food_details = Foods::find($id);
		return view('booking-food.food-details', ['details'=>$food_details, 'comment' => $cmt]);
	}

	public function details_cate($id)
	{
		$data['foodLC'] = Foods::food_cate_details($id);
		$data['cate_details'] = Categories::find($id);
		return view('booking-food.details-cate', ['data'=>$data]);
	}

	public function search()
	{
		return view('booking-food/search');
	}

	 public function cart()
    {
    	if (Request::isMethod('post')) {
	        $id =  Request::get('id');

	        $food = Foods::find($id);

        	$cartInfo = [
            'id' => $id,
            'name' => $food->food_name,
            'price' => $food->food_price,
            'qty' => '1',
            'options' => ['image' => $food->food_img]
        	];

	        
	        Cart::add($cartInfo);
    	}
        //increment the quantity
	    if (Request::get('id') && (Request::get('increment')) == 1) {
	        $rowId = Cart::search(array('id' => Request::get('id')));
	        $item = Cart::get($rowId[0]);

	        Cart::update($rowId[0], $item->qty + 1);
	    }

	    //decrease the quantity
	    if (Request::get('id') && (Request::get('decrease')) == 1) {
	        $rowId = Cart::search(array('id' => Request::get('id')));
	        $item = Cart::get($rowId[0]);

	        Cart::update($rowId[0], $item->qty - 1);
	    }

	    //destroy cart
	    if (Request::get('destroy') == 'all') {
	        Cart::destroy();
	    }

	    //remove 
	    if (Request::get('id') && (Request::get('remove')) == 1) {
	       $rowId = Cart::search(array('id' => Request::get('id')));
	       Cart::remove($rowId[0]);
	    }

        $cart = Cart::content();

        return view('booking-food.cart',  ['cart'=>$cart]);
       
    }

    public function checkout()
    {
    	$cart = Cart::content();
    	return view('booking-food.checkout',  ['cart'=>$cart]);
    }

    public function postCheckout()
    {
    	try{
	    	 $cart = Cart::content();
	    	 $bill = new Bill();
	    	 $bill->user_id = Auth::user()->id;
	    	 $bill->date_order = date('Y-m-d H:i:s');
	    	 $bill->total = str_replace(',', '', Cart::total());
	    	 $bill->address = Request::input('address');
	    	 $bill->save();
	    	 if (count($cart) > 0)
	    	 {
		    	 foreach ($cart as $key => $item) {
		    	 	$billDetail = new BillDetails;
                    $billDetail->bill_id = $bill->id;
                    $billDetail->food_id = $item->id;
                    $billDetail->qty = $item->qty;
                    $billDetail->price = $item->price;
                    $billDetail->subtotal = $item->subtotal;
                    $billDetail->save();
		    	 }
	    	}
	    	 Cart::destroy();
    	}
    	catch (Exception $e) {
    		 echo $e->getMessage();
    	}

        return redirect('user-profile');
    }

    public function validator()
	{
		return Validator::make( [
			'name' => 'required|max:255',
			'phone' => 'required',
			'password' => 'required|confirmed|min:6',
		]);
	}

    public function getProfile()
    {
    	if (Auth::check())
    	{
			if(Request::input('name') || Request::input('password') || Request::input('phone'))
			{
				$update = Request::all();
				$userkByID = User::find(Auth::user()->id);
				$userkByID->name = $update['name'];
				$userkByID->password = bcrypt($update['password']);
				$userkByID->phone = $update['phone'];
				$userkByID->save();
				return redirect('user-profile');
			}
    	}
    	return view('booking-food.user-profile');
    }

    public function getBillDetails($id)
    {
    	$billDetail = BillDetails::where('bill_id', '=',$id)->get();
    	return view('booking-food.bill-details', ['billDetail' => $billDetail]);
    }

    public function book_table()
    {
    	if (Auth::check())
    		{
    		$book = Request::all();
    		Booking::insert([
			'user_id'=> Auth::user()->id,
			'date_book'=> date('d-m-Y', strtotime($book['date_book'])),
			'time_book'=> $book['time'],
			'party_size'=> $book['party_size'],
		]);
    		}
    	return redirect('user-profile');
    }

    public function cancel_booking($id)
	{
		Booking::find($id)->delete();
		return redirect('user-profile');
	}

}
