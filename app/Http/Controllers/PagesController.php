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
    public function showSamplePage()
    {
        $samples=Sample::getSampleDetails();
        //pass received user 's details to view
        return view('sample')->with('sample',$samples);

    }

}
