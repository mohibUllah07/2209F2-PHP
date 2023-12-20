<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class products extends Controller
{
    //

    function addProductsPage()
    {
        return view('productsInsert');
    }
    function insertProducts(Request $data)
    {

        $fileName = $data->file('prodImage')->store('public');

        $prodImage = Str::after($fileName, 'public/');




        DB::table('products_table')->insert([
            'prodName' => $data->prodName,
            'prodPrice' => $data->prodPrice,
            'prodDesc' => $data->prodDesc,
            'prodImage' => $prodImage,
        ]);


        return back()->with('successMessage','Product Inserted Sucessfully!');

        // return $fileName;
        // return $data;

    }


    function viewProductsPage()
    {
        $products =  DB::table('products_table')->get();
        return view('view')->with('products',$products);
    }
   
    function deleteProduct($id)
    {
       DB::table('products_table')->where('id', $id)->delete();
        return back()->with('deleteMessage','Product Deleted Sucessfully!');
    }

    function updatePage($id)
    {
        $product =  DB::table('products_table')->where('id',$id)->get();
        return view('productsUpdate')->with('product',$product);
        // return $product;
    }
    function update(Request $data)
    {


        if($data->file('prodImage') == '')
        {
            // echo "<script>alert('Image is not choosen')</script>";
            DB::table('products_table')->where('id',$data->prodId)->update([
                'prodName' => $data->prodName,
                'prodPrice' => $data->prodPrice,
                'prodDesc' => $data->prodDesc,
                'prodImage' => $data->secondaryImage
            ]);
            return redirect('/products')->with('updateMessage','Product Updated Sucessfully!');
            // return $data;
        }
        else
        {

            $fileName = $data->file('prodImage')->store('public');

            $prodImage = Str::after($fileName, 'public/');
    
           DB::table('products_table')->where('id',$data->prodId)->update([
                'prodName' => $data->prodName,
                'prodPrice' => $data->prodPrice,
                'prodDesc' => $data->prodDesc,
                'prodImage' => $prodImage
            ]);
            return redirect('/products')->with('updateMessage','Product Updated Sucessfully!');
            // return $data;
        }

    }









}
