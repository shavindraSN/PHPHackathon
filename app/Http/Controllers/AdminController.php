<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller {

    public function addCashier()
    {

        $input=Request::all();
        $name=$input['name'];
        $age=$input['age'];
        $date=$input['email'];
        $input['published_at']=Carbon::now();
        $sample=new Sample();




        $sample->name=$name;
        $sample->age=$age;
        $sample->date=$date;

        $sample->save();

        //after a successful insert a success message will passed to the view
        \Session::flash('flash_message_sample','done');
        return redirect('sample');

    }


}
