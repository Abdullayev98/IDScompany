<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function clients(){
        $clients = Client::all();
        $clients_json = json_encode($clients);
        return view('clients', compact('clients_json'));
    }
}
