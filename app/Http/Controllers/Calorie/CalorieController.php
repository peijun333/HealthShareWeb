<?php

namespace App\Http\Controllers\Calorie;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CalorieController extends Controller
{
    public function calorie()
    {
        return view('calorie.index');
    }
    public function calorieAPI(Request $request)
    {
        //API検索をかける
        $foodName = $request->food;
        $url = 'http://24th.jp/test/api_cal.php?submit=on&name=';
        $xml = simplexml_load_file( $url . $foodName );

        $food = $xml->food->name;
        //foreach($xml->food as $test){
            //$aaa = $tes
        //}

        return view('calorie.index',compact('food'));
    }
}
