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
        $data = array();
        $url = 'http://24th.jp/test/api_cal.php?submit=on&name=';
        $xml = simplexml_load_file( $url . $foodName );
        $number = $xml->results_returned;

        foreach($xml->food as $item){
            $x = array();
            $x['id'] = (string)$item->id;
            $x['name'] = (string)$item->name;
            $x['cal'] = (string)$item->cal;
            $data[] = $x;
        }

        logger($data);

        return view('calorie.index',compact('data'));
    }
}
