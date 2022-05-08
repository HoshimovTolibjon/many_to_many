<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        return view("product");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("add_product");
    }

    public function store(Request $request)
    {
       $product = new Product();
       $product->name = $request->name;
       $product->price = $request->price;
       $product->country = $request->country;
       $product->c_id = $request->c_id;
       $product->save();

       $p_id = Product::all()->last()->id;
       $images = $request->file('images');
       foreach ($images as $image){
           $img = new Image();
           $img->image = $image->store('images');
           $img->save();

           $im_id = Image::all()->last()->id;

           $pro_img = new ProductImage();
           $pro_img->product_id = $p_id;
           $pro_img->image_id = $im_id;
           $pro_img->save();
       }

       return redirect('/');
    }

    public function show(Product $product)
    {

    }

    public function edit(Product $product)
    {
        //
    }

    public function update(Request $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        //
    }
}
