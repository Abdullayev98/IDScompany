<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $clients = Client::pluck('name','id')->all();
        return view('product', compact('clients'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'amount'=>'required',
        ]);

        $product = new Product;
        $product->title = $request->title;
        $product->amount = $request->amount;
        $product->client_id = $request->client_id;
        $product->save();

        return redirect()->back()->with('success', 'Malumotlar muvaffaqqiyatli saqlandi');

    }
}
