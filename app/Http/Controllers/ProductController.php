<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProduct;
use App\Http\Requests\UpdateProduct;
use App\Http\Resources\ProductResource;
use App\Product;

class ProductController extends Controller
{
    function index()  {
        return ProductResource::collection(Product::all());
    }

    function store(StoreProduct $request){
        return Product::create($request->validated());
    }


    function update(Product $product, UpdateProduct $request){
        return $product->update($request->validated());
    }

    function show(Product $product){
        return new ProductResource($product);
    }


    function destroy(Product $product){
        try{
            $product->delete();
            return response()->json(['status'=>'deleted'], 200);
        }
        catch (\Exception $e){
            return response()->json(['status'=>'could not Delete'], 400);
        }
    }
}
