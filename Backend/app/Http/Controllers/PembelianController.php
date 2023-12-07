<?php

namespace App\Http\Controllers;

use App\Models\THbeli;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function getData()
    {
        $data = THbeli::join('t_supliers','t_supliers.kodespl','=','t_hbelis.kodespl')->join('t_dbelis','t_dbelis.notransaksi','=','t_hbelis.notransaksi')->get();
        return response()->json($data);
    }
}
