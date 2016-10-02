<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Food;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use DB;
use Request;


class CashierController extends Controller {

    public function addFood()
    {

        $input=Request::all();

        $foodname=$input['food'];
        $uprice=$input['uprice'];

        $available=$input['available'];
       $input['created_at']=Carbon::now();
        $input['updated_at']=Carbon::now();
        $food=new Food();




        $food->food=$foodname;
        $food->uprice=$uprice;
        $food->available=$available;

        $food->save();

        //after a successful insert a success message will passed to the view
        \Session::flash('flash_message_food','done');
        $foods=Food::getFoodDetails();

        return view('cashier/index')->with('food',$foods);

    }

    public function deleteFood($id)
    {


        DB::table('foods')
            ->where('id','=',$id)
            ->delete();

        $foods=Food::getFoodDetails();

        return view('cashier/index')->with('food',$foods);

    }

    public function updateFood()
    {
        $food=input::get('food');
        $uprice=input::get('uprice');
        $available=input::get('available');
        $id=input::get('id');

        $foods=Food::getFoodDetails();



        //update users table for given values
        DB::table('foods')
            ->where('id', $id)
            ->update(['name' => $food]);
        DB::table('foods')
            ->where('id', $id)
            ->update(['uprice' => $uprice]);
        DB::table('foods')
            ->where('id', $id)
            ->update(['$available' => $available]);

        //pass a successful message to view
        \Session::flash('flash_message_sample_update','done');

        return view('cashier/index')->with('food',$foods);
    }

    public function showUpdateFood($id)
    {
        $foods=Food::getFoodDetails();
        //pass received details to update user page
        return view('cashier/fooddUpdate')->with('food',$foods);

    }

}
