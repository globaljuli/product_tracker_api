<?php

namespace App\Http\Controllers\Purchase;

use App\Http\Controllers\Controller;
use App\Models\Purchase;
use Illuminate\Http\JsonResponse;

class ServePurchasesController extends Controller
{
    public function getAllPurchases(): JsonResponse
    {
        return new JsonResponse(["ok" => true, "response" => Purchase::all()]);
    }

    public function getPurchase($purchaseId): JsonResponse
    {
        $purchase = Purchase::find($purchaseId);
        if(!$purchase){
            return new JsonResponse(["errors" => [
                "error" => 404,
                "title" => "Purchase not found"
            ]]);
        }
        return new JsonResponse(["ok" => true, "response" => Purchase::find($purchaseId)]);
    }
}
