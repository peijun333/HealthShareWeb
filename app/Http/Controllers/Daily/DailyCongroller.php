<?php

namespace App\Http\Controllers\Daily;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DailyRecords;

class DailyController extends Controller
{
    public function daily()
    {
        logger("daily.index");
        return view('daily.index');
    }

    public function insert(Request $request){

        logger("insert");
        
        $daily_records = new DailyRecords;
        $daily_records->low_blood_pressure = $request->low_blood_pressure;
        $daily_records->high_blood_pressure = $request->high_blood_pressure;
        $daily_records->weight = $request->weight;
        $daily_records->fat = $request->fat;

        $daily_records->save();

        return view('daily.index');
    }
}
