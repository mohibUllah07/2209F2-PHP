<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center m-5">Add Products!</h1>
    <div class="container">
    <form class="row g-3">
        <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="prodName">
        </div>
        <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Product Description</label>
            <input type="text" class="form-control" id="prodDescription">
        </div>
        <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Product Price</label>
            <input type="text" class="form-control" id="prodPrice">
        </div>
   


        <div class="col-12">
            <button type="submit" class="btn btn-primary" id="addBtn">Add Products</button>
        </div>
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



        <script>
            $(document).ready(()=>{


                let addBtn = document.getElementById('addBtn');


                addBtn.addEventListener('click',(eva)=>{
                    eva.preventDefault();

            let prodName = document.getElementById('prodName').value;
            let prodDescription = document.getElementById('prodDescription').value;
            let prodPrice = document.getElementById('prodPrice').value;


            $.ajax(
            {
                url: 'insertQuery.php',
                type: 'POST',
                data: {
                    prodName: prodName,
                    prodDescription: prodDescription,
                    prodPrice: prodPrice
                },
                success: ()=>{
                    console.log('Data inserted')
                }
            })

                })


     
                                





            })
        </script>




</body>

</html>