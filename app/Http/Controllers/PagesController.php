<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Sample;
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

        return view('customer/index');

    }
    public function showCustomerOrdersPage()
    {

        return view('customer/myorders');

    }
    //End Of Customer Functions
    //-----------------------------------------------


}
