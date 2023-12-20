<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">Products Page!</h1>
    @if(session()->has('deleteMessage'))
    <div class="alert alert-danger" role="alert">
        {{Session()->get('deleteMessage')}}
      </div>
    @endif
    @if(session()->has('updateMessage'))
    <div class="alert alert-success" role="alert">
        {{Session()->get('updateMessage')}}
      </div>
    @endif

    <div class="container">
        <div class="row">
            @foreach ($products as $product)
            <div class="card" style="width: 18rem;">
                <img src="../storage/{{$product->prodImage}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$product->prodName}}</h5>
                  <p class="card-text">{{$product->prodDesc}}</p>
                  <p class="card-text">{{$product->prodPrice}}</p>
                  <a href="/update/{{$product->id}}" class="btn btn-primary">Update</a>
                  <a href="/delete/{{$product->id}}" class="btn btn-danger">Delete</a>
                </div>
              </div>
            @endforeach
           
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>