<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Products Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1>Update Products Page!</h1>
    <div class="container">
        <div class="row">


            @if(session()->has('successMessage'))
            <div class="alert alert-success" role="alert">
                {{Session()->get('successMessage')}}
              </div>
            @endif
        
     
       

            <form class="row g-3" action="/updateProduct" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" class="form-control" value="{{$product[0]->id}}" name="prodId">
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Product Name</label>
                    <input type="text" class="form-control" value="{{$product[0]->prodName}}" name="prodName">
                </div>
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Product Price</label>
                    <input type="text" class="form-control" value="{{$product[0]->prodPrice}}" name="prodPrice">
                </div>
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Product Description</label>
                    <textarea type="text" class="form-control" name="prodDesc">{{$product[0]->prodDesc}}</textarea>
                </div>
                <div class="col-md-12">
                    {{-- {{$product[0]->prodImage}} --}}
                    <img src="../storage/{{$product[0]->prodImage}}" alt="" width="100px" height="100px" id="image-preview">
                    <label for="inputPassword4" class="form-label">Product Image</label>
                    <input type="hidden" name="secondaryImage" value="{{$product[0]->prodImage}}">
                    <input type="file" class="form-control" name="prodImage" value="{{$product[0]->prodImage}}" id="image">
                </div>


                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="submitBtn">Update Products</button>
                </div>
            </form>


        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>


<script>


    // let image = document.getElementById('image');

    // // image.files[0].name = 'jfkdasjfksdjk'
    
    // image.addEventListener('change',(e)=>{
    //     console.log(image.files[0])
    //     console.log(e)
    // })

    // let image = document.getElementById('image');
    // let imagePreview = document.getElementById('image-preview');

    // image.addEventListener('change', (e) => {
    //     const file = image.files[0];

    //     if (file) {
    //         // Create a URL for the selected image
    //         const imageUrl = URL.createObjectURL(file);

    //         // Display the preview
    //         imagePreview.src = imageUrl;
    //     }
    // });



</script>

</html>
