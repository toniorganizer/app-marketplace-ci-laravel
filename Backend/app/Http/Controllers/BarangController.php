<?php

namespace App\Http\Controllers;

use App\Models\TDbeli;
use App\Models\THbeli;
use App\Models\TStock;
use App\Models\TBarang;
use App\Models\THutang;
use App\Models\TSuplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function getData()
    {
        $data = TBarang::get();
        return response()->json($data);
    }

    public function tambahDataBarang(Request $request)
    {
        TBarang::create([
            'kodebrg' => $request->kodebrg,
            'namabrg' => $request->namabrg,
            'satuan' => $request->satuan,
            'hargabeli' => $request->harga,
        ]);
        return response()->json(['status' => 'success']);
    }

    public function getBarang($id){
        $data = TBarang::where('kodebrg', $id)->first();
        return response()->json($data);
    }

    public function checkoutBarang(Request $request){

        $tahunBulan = now()->format('Y-m-d');
        $kode = now()->format('Ym');
        $nmrtransaksi = THbeli::where('tglbeli', $tahunBulan)->max('id');
        $urut = ($nmrtransaksi == null) ? 1 : $nmrtransaksi + 1;
        
        $newnotransaksi = 'B' . $kode . sprintf('%03d', $urut);

        THbeli::create([
            'notransaksi' => $newnotransaksi,
            'kodespl' => $request->kodespl,
            'tglbeli' => $request->tglbeli,
        ]);


        TDbeli::create([
            'notransaksi' => $newnotransaksi,
            'kodebrg' => $request->kodebrg,
            'hargabeli' => $request->hargabeli,
            'qty' => $request->qty,
            'diskon' => $request->diskon,
            'diskonrp' => $request->diskonrp,
            'totalrp' => $request->totalrp,
        ]);

        $checkStok = TStock::where('kodebrg', $request->kodebrg)->first();

        if(is_null($checkStok)){
            TStock::create([
                'kodebrg' => $request->kodebrg,
                'qtybeli' => $request->qty,
            ]);
        }else{
                $checkStok = TStock::where('kodebrg', $request->kodebrg)->first();
                $updatestock = $checkStok->qtybeli + $request->qty;
                TStock::where('kodebrg', $request->kodebrg)->update([
                'kodebrg' => $request->kodebrg,
                'qtybeli' => $updatestock,
            ]);
        }

        $hutang = THutang::where('kodespl', $request->kodespl)->first();
        
        if(is_null($hutang)){
            THutang::create([
                'notransaksi' => $newnotransaksi,
                'kodespl' => $request->kodespl,
                'tglbeli' => $request->tglbeli,
                'totalhutang' => $request->totalrp,
            ]);
        }else{
            $totalhutang = $hutang->totalhutang + $request->totalrp;
            THutang::where('kodespl', $request->kodespl)->update([
                'notransaksi' => $newnotransaksi,
                'tglbeli' => $request->tglbeli,
                'totalhutang' => $totalhutang,
            ]);
        }

        return response()->json(['status' => 'success']);
    }

    public function detailPembelian($id){
        // dd($id);
        $data = TDbeli::join('t_hbelis','t_hbelis.notransaksi','=','t_dbelis.notransaksi')->join('t_barangs','t_barangs.kodebrg','=','t_dbelis.kodebrg')->where('kodespl', $id)->get();
        return response()->json($data);
    }

    public function editBarang($id){
        $data = TBarang::where('kodebrg', $id)->first();
        return response()->json($data);
    }

    public function updateBarang(Request $request, $id){
        TBarang::where('kodebrg', $id)->update([
            'namabrg' => $request->namabrg,
            'hargabeli' => $request->hargabeli,
        ]);
        return response()->json(['status' => 'success']);
    }

    public function hapusBarang($id){
        TBarang::where('kodebrg', $id)->delete();
        return response()->json(['status' => 'success']);
    }

    public function stockBarang()
    {
        $data = TStock::join('t_barangs','t_barangs.kodebrg','=','t_stocks.kodebrg')->get();
        return response()->json($data);
    }
}
