<?php

namespace App\Http\Controllers\Uses;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductUse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ServeUsesController extends Controller
{
    public function getAllProductUses($productId): JsonResponse
    {
        $uses = ProductUse::where('product_id', $productId)->get();
        return new JsonResponse(["ok" => true, "response" => $uses]);
    }

    public function getAllPurchaseUses($purchaseId): JsonResponse
    {
        $uses = ProductUse::where('purchase_id', $purchaseId)->orderBy('created_at', 'desc')->get();
        return new JsonResponse(["data" => $uses]);
    }
}
