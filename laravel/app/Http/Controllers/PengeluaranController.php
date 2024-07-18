<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengeluaranModel;
use Illuminate\Support\Facades\Auth;

class PengeluaranController extends Controller
{
    public function formPengeluaran(){
        $uang['judul'] = "Input Pengeluaran";
        return view("formPengeluaran", $uang);                
    }

    public function dataPengeluaran(){
        $uang['judul'] = "Data Pengeluaran";
        $uang['data_pengeluaran'] = PengeluaranModel::where('user_id', Auth::id())->get();
        $uang['total_pengeluaran'] = $this->totalPengeluaran();
        return view("dataPengeluaran", $uang);                
    }

    public function simpanPengeluaran(Request $request){
        $data = new PengeluaranModel;
        $data->jumlah = $request->jumlah;
        $data->keterangan = $request->keterangan;
        $data->tanggal = $request->tanggal;
        $data->user_id = Auth::id();
        $data->save();
        return redirect()->route('dataPengeluaran');
    }

    public function editPengeluaran($id){
        $data['judul'] = "Edit Pengeluaran";
        $data = PengeluaranModel::where('id', $id)->where('user_id', Auth::id())->first();
        return view('formEditPengeluaran', compact('data'));
    }

    public function updatePengeluaran(Request $request, $id){
        $data = PengeluaranModel::where('id', $id)->where('user_id', Auth::id())->first();
        $data->jumlah = $request->jumlah;
        $data->keterangan = $request->keterangan;
        $data->tanggal = $request->tanggal;
        $data->save();
        return redirect()->route('dataPengeluaran');
    }

    public function hapusPengeluaran($id){
        $data = PengeluaranModel::where('id', $id)->where('user_id', Auth::id())->first();
        if ($data) {
            $data->delete();
        }
        return redirect()->route('dataPengeluaran');
    }

    private function totalPengeluaran(){
        return PengeluaranModel::where('user_id', Auth::id())->sum('jumlah');
    }
}
