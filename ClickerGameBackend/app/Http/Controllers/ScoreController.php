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
            return;
        }

        Score::create([
        'score' => $value,
        'currency' => $currency
        //'user' => 1
        ]);

        // Leaderboard::updateOrCreate([
        //     ['user_id' =>  $userId], // Search criteria
        //     ['score' => $value] 
        // ]);

        Log::debug("Value is " . $value);

        // Leaderboard::create(
        //     [
        //         'user_id' => $userId,
        //     'score' => $value
        
        //      ]
        // );

        //  Leaderboard::create([
        // 'score' => $value,
        // 'user_id' => $userId
        // //'user' => 1
        // ]);

        $flight = Leaderboard::updateOrCreate(
            ['user_id' => $userId],
            ['score' => $value]
        );
    }
}

