<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use App\Sample;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use DB;
class SampleController extends Controller {

public function addSample(Requests\SampleRequest $request)
{

    $input=Request::all();
    $name=$input['name'];
    $age=$input['age'];
    $date=$input['date'];
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
public function deleteSample($id)
{
    DB::table('samples')
        ->where('id','=',$id)
        ->delete();


    return redirect('sample');
}
    public function showUpdateSample($id)
    {
        $samples=Sample::getSample($id);
        //pass received details to update user page
        return view('sampleUpdate')->with('sample',$samples);

    }
    public function updateSample()
    {
        $name=input::get('name');
        $age=input::get('age');
        $date=input::get('date');
        $id=input::get('id');




        //update users table for given values
        DB::table('samples')
            ->where('id', $id)
            ->update(['name' => $name]);
        DB::table('samples')
            ->where('id', $id)
            ->update(['date' => $date]);
        DB::table('samples')
            ->where('id', $id)
            ->update(['age' => $age]);

        //pass a successful message to view
        \Session::flash('flash_message_sample_update','done');

        return redirect('sample');
    }
}
