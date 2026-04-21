<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Score;

class ScoreController extends Controller
{
    

    public function incrementScoreByOne(Request $request){
    
        $value = $request->query('score');
        $currency = $request->query('currency');
        Log::debug("Value is " . $value);
        Log::debug("Currency is " . $currency);
        if($value == null){
            return;
        }

        Score::create([
        'score' => $value,
        'currency' => $currency
        //'user' => 1
        ]);
    }
}
