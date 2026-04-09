<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Score;

class ScoreController extends Controller
{
    

    public function incrementScoreByOne(){

       Score::create([
        'score' => 1
       ]);

    }
}
