<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Order;
use Illuminate\Http\Request;
use App\Sample;
use App\Food;
class PagesController extends Controller {


	public function showRegisterPage()
    {
        return view('register');
    }
    public function showLoginPage()
    {
        return view('login');
    }
    public function showAdminPage()
    {
        return view('admin/index');
    }
    public function showSamplePage()
    {
        $samples=Sample::getSampleDetails();
        return view('sample')->with('sample',$samples);

    }
    //-----------------------------------------------
    //Customer Functions
    public function showCustomerPage()
    {
        $foods = Food::getFoodDetails();
        return view('customer/index')->with('foods',$foods);

    }
    public function showCustomerOrdersPage()
    {
        $orders = Order::getMyOrders();
        //return $orders;
        return view('customer/myorders')->with('order',$orders);

    }
    //End Of Customer Functions
    //-----------------------------------------------
    public function showReportsPage()
    {
        $samples=Food::getFoodDetails();

        return view('admin/repo')->with('sample',$samples);

    }

}
