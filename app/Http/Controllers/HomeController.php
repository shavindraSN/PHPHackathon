<?php namespace App\Http\Controllers;
use Auth;
use App\Food;
class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
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
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{

        if( Auth::user()->usertype=="admin")
        {

            return view('admin/index');

        }
        if( Auth::user()->usertype=="customer")
        {

            return view('customer/index');
        }
        if( Auth::user()->usertype=="cashier")
        {
            $foods=Food::getFoodDetails();

            return view('cashier/index')->with('food',$foods);
        }
	}

}
