<?php

namespace App\Http\Controllers;

use App\Models\TSuplier;
use Illuminate\Http\Request;

class ApiController extends Controller
{

    public function tambahData(Request $request)
    {
        TSuplier::create([
            'kodespl' => $request->kodespl,
            'namaspl' => $request->namaspl,
        ]);

        return response()->json(['status' => 'success']);
    }
}
