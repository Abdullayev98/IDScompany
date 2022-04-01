<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientsController extends Controller
{
    public function clients(){
        $clients = DB::table('clients')
            ->join('products', 'clients.id', '=', 'products.client_id')
            ->select('clients.name','clients.family','products.title','products.amount')
            ->get();

        $clients_json = json_encode($clients);
        return view('clients', compact('clients_json'));
    }
}
