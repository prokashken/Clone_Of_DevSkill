<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index',compact('products'));
    }

    public function mydevshop()
    {
        $products = Product::all();
        return view('user.products.my_devshop',compact('products'));
    }

    public function productDetails($id)
    {
        $product = Product::find($id);
        return view('user.products.product_details',compact('product'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image_path = null;

        if($request->hasFile('product_image'))
        {
            $image_path = $request->file('product_image')->store('products','public');
        }

        $product = new Product();

        $product->name = $request->title;
        $product->image_path = $image_path;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->specifications = $request->specification;
        $product->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $image_path = null;
        $description = $request->description;
        $specification = $request->specification;
        if($request->hasFile('product_image'))
        {
            $image_path = $request->file('product_image')->store('products','public');
        }

        $product = Product::find($id);

        if ($image_path == null) {
            $image_path = $product->image_path;
        }
        if ($description == null) {
            $description = $product->description;
        }
        if ($specification == null) {
            $specification = $product->specifications;
        }
        
        $product->name = $request->title;
        $product->image_path = $image_path;
        $product->price = $request->price;
        $product->description = $description;
        $product->specifications = $specification;
        $product->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back();
    }
}
