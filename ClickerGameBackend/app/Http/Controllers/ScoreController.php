<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Score;

class ScoreController extends Controller
{
    

    public function incrementScoreByOne(Request $request){
    
        $value = $request->query('score');
        Log::debug($value);
       Score::create([
        'score' => $value
        //'user' => 1
       ]);

    }
}
