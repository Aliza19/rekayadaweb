<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
{
    $products = [
        ['id' => 1, 'name' => 'Product A', 'price' => 10000],
        ['id' => 2, 'name' => 'Product B', 'price' => 20000],
        ['id' => 3, 'name' => 'Product C', 'price' => 30000],
    ];

    return response()->json($products);
}
}
