<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Currency;

class CurrencyController extends Controller
{
    public function incrementCurrency(Request $request){
    
        $value = $request->query('currency');
        Log::debug($value);
        Score::create([
        'currency' => $value
        //'user' => 1
        ]);
    }
}
