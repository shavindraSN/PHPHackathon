<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use DB;
class Order extends Model {

    public static function getMyOrders()
    {
        $email = Auth::user()->email;
        $myorders=DB::table('orders')
                ->join('foods', 'foods.id', '=', 'orders.food_id')
                ->join('users', 'users.id', '=', 'orders.user_id')
                ->where('users.email','=',$email)
                ->orderby('orders.id','desc')
                ->get();
            return $myorders;
    }

}
