<?php

namespace App\Http\Controllers\Purchase;

use App\Http\Controllers\Controller;
use App\Models\Purchase;
use Illuminate\Http\JsonResponse;

class FinishPurchaseController extends Controller
{
    public function markPurchaseAsFinished($purchaseId): JsonResponse
    {
        $purchase = Purchase::find($purchaseId);

        if(!$purchase){
            return new JsonResponse(["errors" => 
                [
                    "status" => 400,
                    "title" =>  "The product purchase does not exist"
                ]
            ]);
        }

        if(!$purchase->setProductPurchaseAsFinished()){
            return new JsonResponse(["errors" => 
                [
                    "status" => 400,
                    "title" =>  "The product purchase could not be updated. Maybe was already finished?"
                ]
            ]);
        }

        return new JsonResponse([
            "data" => 
            [
                "purchase" => $purchase
            ]
        ]);
    }

}
