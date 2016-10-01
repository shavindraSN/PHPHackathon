<?php namespace App;

use Illuminate\Database\Eloquent\Model;
Use Illuminate\Support\Facades\DB;
class Sample extends Model {

    public static function getSampleDetails()
    {
        $samples=DB::table('samples')
            ->get();
        return $samples;
    }
public static function getSample($id)
{
    $sample=DB::table('samples')
        ->where('id','=',$id)
        ->get();
    return $sample;
}
}
