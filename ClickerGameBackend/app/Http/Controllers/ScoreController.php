<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Score;
use App\Models\Leaderboard;

class ScoreController extends Controller
{
    

    public function incrementScoreByOne(Request $request){
    
        $value = $request->query('score');
        $currency = $request->query('currency');
        $userId = $request->query('user_id');
        
        Log::debug("Value is " . $value);
        Log::debug("Currency is " . $currency);
        Log::debug("User id is " . $userId);

        if($value == null || $userId == null ){
            return response()->json(['error' => 'Missing required parameters'], 400);
        }

        Score::create([
        'score' => $value,
        'currency' => $currency
        ]);

        //Log::debug("Value is " . $value);

        $scores = Leaderboard::updateOrCreate(
            ['user_id' => $userId],
            ['score' => $value]
        );

        $leaderboard = Leaderboard::orderBy('score', 'desc')->get();

        return response()->json($leaderboard);
    }
}

