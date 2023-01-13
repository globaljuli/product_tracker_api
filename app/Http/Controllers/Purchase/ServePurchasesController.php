<?php

namespace App\Http\Controllers\Purchase;

use App\Http\Controllers\Controller;
use App\Models\Purchase;
use Illuminate\Http\JsonResponse;

class ServePurchasesController extends Controller
{
    public function getAllOpenPurchases(): JsonResponse
    {
        return new JsonResponse(["ok" => true, "response" => Purchase::where('finished_at', null)->get()]);
    }

    public function getAllFinishedPurchases(): JsonResponse
    {
        return new JsonResponse(["ok" => true, "response" => Purchase::where('finished_at', '!=', null)->get()]);
    }

    public function getAllPurchases(): JsonResponse
    {
        return new JsonResponse(["data" => 
        [
            "open_purchases" => Purchase::where('finished_at', null)->get(),
            "closed_purchases" => Purchase::where('finished_at', '!=', null)->get(),
        ]
        ]);
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
