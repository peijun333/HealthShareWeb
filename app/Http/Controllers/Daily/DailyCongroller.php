<?php

namespace App\Http\Controllers\Daily;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DailyController extends Controller
{
    public function daily()
    {
        return view('daily.index');
    }

    public function dailyAPI(Request $request){
        
        DB::table('daily_records')->insert([
            ['weight' => $request->weight],
            ['high_pressure' => $request->high_pressure],
            ['low_pressure' => $request->low_pressure]
        ]);

        return view('daily.index');
    }
}
