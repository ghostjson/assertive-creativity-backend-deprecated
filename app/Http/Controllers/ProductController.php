<?php

namespace App\Http\Controllers;

use App\Http\Requests\FileUploadRequest;
use App\Http\Requests\StoreProduct;
use App\Http\Requests\UpdateProduct;
use App\Http\Resources\ProductResource;
use App\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Facades\Storage;


/**
 * @group  Product
 * @authenticated
 * APIs for Product management
 */
class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->except(['index', 'show']);
    }

    /**
     * Get all products
     * @apiResourceCollection App\Http\Resources\ProductResource
     * @apiResourceModel App\Product
     */
    function index() : ResourceCollection {
        return ProductResource::collection(Product::all());
    }

    /**
     *
     * Store a product
     * @bodyParam name string required Name of the product
     * @bodyParam price int required price of the product
     * @bodyParam features string features of the product
     * @bodyParam description string description of the product
     * @bodyParam stock int stock of the product
     * @bodyParam image url image url of the product
     *
     * @authenticated
     * @param StoreProduct $request
     * @return bool
     */
    function store(StoreProduct $request) {
        return Product::create($request->validated());
    }

    /**
     * Update a product
     * @urlParam product required id of the product
     * @bodyParam name string required Name of the product
     * @bodyParam price int required price of the product
     * @bodyParam features string features of the product
     * @bodyParam description string description of the product
     * @bodyParam stock int stock of the product
     * @bodyParam image url image url of the product
     *
     * @authenticated
     * @param Product $product
     * @param UpdateProduct $request
     * @return bool
     */
    function update(Product $product, UpdateProduct $request){
        return $product->update($request->validated());
    }

    /**
     * Show a product
     * @urlParam product required id of the product
     * @apiResource App\Http\Resources\ProductResource
     * @apiResourceModel App\Product
     * @param Product $product
     * @return ProductResource
     */
    function show(Product $product) : ProductResource
    {
        return new ProductResource($product);
    }


    /**
     * Delete a product
     * @urlParam product int id of the product
     * @response {
     *  "status" : "deleted"
     * }
     * @response 400{
        "status" : "could not delete"
     * }
     *
     * @authenticated
     * @param Product $product
     * @return JsonResponse
     */
    function destroy(Product $product) : JsonResponse {
        try{
            $product->delete();
            return response()->json(['status'=>'deleted'], 200);
        }
        catch (\Exception $e){
            return response()->json(['status'=>'could not delete'], 400);
        }
    }

    /**
     * Store a file on aws
     * returns a url of the uploaded file
     * @bodyParam file file required file to be uploaded to aws
     *
     * @authenticated
     * @param FileUploadRequest $request
     * @return string
     */
    function storeFile(FileUploadRequest $request) : string {

        $file_path = $request->file('file')->store('product_files', 's3');
        return Storage::url($file_path);

    }

    function moveFile(){
        Storage::move('test/MisfaST4ameLawvEklXiCcpspShmAz5Jtpe7F6TJ.webp', 'move/MisfaST4ameLawvEklXiCcpspShmAz5Jtpe7F6TJ.webp');
        return response('success', 200);
    }
}
