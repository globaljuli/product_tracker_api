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

        $data = \request()->json()->all();

        try {
            $use = ProductUse::create($data);
        } catch (\Exception $e) {
            return new JsonResponse(['ok' => true, "response" => $e]);
        }

        return new JsonResponse(['ok' => true, "response" => $use]);
    }
}
