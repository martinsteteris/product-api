<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\ProductRequest;
use App\Http\Resources\V1\ProductCollection;
use App\Http\Resources\V1\ProductResource;
use App\Models\Product;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    public function index(): ProductCollection
    {
        $products = Product::all();
        return new ProductCollection($products);
    }

    public function show(Product $product): ProductResource
    {
        return ProductResource::make($product);
    }

    public function store(ProductRequest $request): ProductResource
    {
        $product = Product::create($request->validated());

        return ProductResource::make($product);
    }

    public function update(ProductRequest $request, Product $product): ProductResource
    {
        $product->update($request->validated());

        return ProductResource::make($product);
    }

    public function destroy(Product $product): Response
    {
        $product->delete();

        return response()->noContent();
    }
}
