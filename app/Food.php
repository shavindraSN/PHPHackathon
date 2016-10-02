<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Food extends Model {

    public static function getFoodDetails()
    {
        $foods=DB::table('foods')
            ->get();
        return $foods;
    }

}
