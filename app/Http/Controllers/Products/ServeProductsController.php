<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ServeProductsController extends Controller
{
    public function getAllProducts(): JsonResponse
    {
        return new JsonResponse(["ok" => true, "response" => Product::all()]);
    }

    public function getProduct($productId): JsonResponse
    {
        return new JsonResponse(["ok" => true, "response" => Product::find($productId)]);
    }
}
