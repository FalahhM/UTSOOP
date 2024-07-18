<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PemasukanModel;
use Illuminate\Support\Facades\Auth;

class PemasukanController extends Controller
{
    public function formPemasukan(){
        $uang['judul'] = "Input Pemasukan";
        return view("formPemasukan", $uang);                
    }

    public function dataPemasukan(){
        $uang['judul'] = "Data Pemasukan";
        $uang['data_pemasukan'] = PemasukanModel::where('user_id', Auth::id())->get();
        $uang['total_pemasukan'] = $this->totalPemasukan();
        return view("dataPemasukan", $uang);                
    }

    public function simpanPemasukan(Request $request){
        $data = new PemasukanModel;
        $data->jumlah = $request->jumlah;
        $data->sumber = $request->sumber;
        $data->tanggal = $request->tanggal;
        $data->user_id = Auth::id();
        $data->save();
        return redirect()->route('dataPemasukan');
    }

    public function editPemasukan($id){
        $data['judul'] = "Edit Pemasukan";
        $data = PemasukanModel::where('id', $id)->where('user_id', Auth::id())->first();
        return view('editPemasukan', compact('data'));
    }

    public function updatePemasukan(Request $request, $id){
        $data = PemasukanModel::where('id', $id)->where('user_id', Auth::id())->first();
        $data->jumlah = $request->jumlah;
        $data->sumber = $request->sumber;
        $data->tanggal = $request->tanggal;
        $data->save();
        return redirect()->route('dataPemasukan');
    }

    public function hapusPemasukan($id){
        $data = PemasukanModel::where('id', $id)->where('user_id', Auth::id())->first();
        if ($data) {
            $data->delete();
        }
        return redirect()->route('dataPemasukan');
    }

    private function totalPemasukan(){
        return PemasukanModel::where('user_id', Auth::id())->sum('jumlah');
    }
}

