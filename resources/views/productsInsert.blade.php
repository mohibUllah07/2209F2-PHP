<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Products Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1>Add Products Page!</h1>
    <div class="container">
        <div class="row">


            @if(session()->has('successMessage'))
            <div class="alert alert-success" role="alert">
                {{Session()->get('successMessage')}}
              </div>
            @endif
        
     
       

            <form class="row g-3" action="productInsert" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Product Name</label>
                    <input type="text" class="form-control" name="prodName">
                </div>
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Product Price</label>
                    <input type="text" class="form-control" name="prodPrice">
                </div>
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Product Description</label>
                    <textarea type="text" class="form-control" name="prodDesc"></textarea>
                </div>
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Product Image</label>
                    <input type="file" class="form-control" name="prodImage">
                </div>


                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="submitBtn" value="hello">Add Products</button>
                </div>
            </form>


        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
