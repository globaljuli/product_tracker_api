<?php

namespace App\Http\Controllers\Uses;

use App\Http\Controllers\Controller;
use App\Models\ProductUse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RegisterUseController extends Controller
{
    public function registerUse()
    {

        // id: json["id"],
        // purchaseId: json["purchase_id"],
        // product: Product.fromJson(json["product"]),
        // useTypeId: json["use_type_id"],
        // createdAt: DateTime.parse(json["created_at"]),
        // updatedAt: DateTime.parse(json["updated_at"]),
        //TODO: Dates should be server-generated
        //TODO: Block changes if product_purchase is finished

        $data = \request()->json()->all();

        try {
            $use = ProductUse::create($data);
        } catch (\Exception $e) {
            return new JsonResponse(['ok' => true, "response" => $e]);
        }

        return new JsonResponse(['ok' => true, "response" => $use]);
    }
}
