<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Services\GetCurrency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function currencies(){
        $url = 'https://openexchangerates.org/api/currencies.json';
        $response = new GetCurrency();
        $data = $response->create($url);
        $array=json_decode($data);
        foreach($array as $k=>$v)
        {
            $currencies = new Currency;
            $currencies->short_name = $k;
            $currencies->country = $v;
            $currencies->save();
        }
        return redirect()->route('home')->with('success', 'Malumotlar muvaffaqqiyatli saqlandi');
    }
}
