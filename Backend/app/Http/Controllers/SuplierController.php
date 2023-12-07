<?php

namespace App\Http\Controllers;

use App\Models\TSuplier;
use Illuminate\Http\Request;

class SuplierController extends Controller
{
    public function getData()
    {
        $data = TSuplier::get();
        return response()->json($data);
    }
}
