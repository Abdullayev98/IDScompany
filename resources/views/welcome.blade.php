<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        
    </head>
    <body class="bg-secondary">
        <div class="container">
            @if(session()->has('success'))
            <div class="alert alert-success mt-4">
                {{ session()->get('success') }}
            </div>
        @endif
            <h1 class="text-center mt-5">Services</h1>
            <div style="height: 300px;" class="row d-flex justify-content-center align-items-center">
                <div class="col-md-3 offset-md-1">
                    <button class="btn btn-success"><a href="{{route('products.index')}}" class="text-white text-decoration-none">Save Products Data</a></button>
                </div>
                <div class="col-md-3 offset-md-1">
                    <button class="btn btn-success"><a href="{{route('clients.json')}}" class="text-white text-decoration-none">Get Clients table as JSON</a></button>
                </div>
                <div class="col-md-3 offset-md-1">
                    <button class="btn btn-success"><a href="{{route('currency.store')}}" class="text-white text-decoration-none">Save Currencies Value</a></button>
                </div>
            </div>
        </div>
    </body>
</html>
