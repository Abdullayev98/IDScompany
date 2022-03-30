<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container">
        <div class="row">
            @if(session()->has('success'))
                <div class="alert alert-success mt-4">
                    {{ session()->get('success') }}
                </div>
            @endif
            <div class="col-md-8 offset-md-2 mt-4">
                <h2 class="text-center">Products</h2>
                <form class="mb-4" method="POST" action="{{route('products.store')}}">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="title" class="form-label">Product Name</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{old('title')}}" placeholder="Product nomini kiriting">
                    </div>
                    <div class="form-group mb-3">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="number" name="amount" class="form-control @error('amount') is-invalid @enderror" id="amount" value="{{old('amount')}}" placeholder="Product miqdorini kiriting">
                    </div>
                    <div class="form-group mb-3">
                        <label for="client_id">Client</label>
                        <select name="client_id" id="client_id" class="form-select">
                            @foreach ($clients as $k => $v )
                                <option value="{{$k}}">{{$v}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
            </div>
        </div>
    </div>
    
</body>
</html>