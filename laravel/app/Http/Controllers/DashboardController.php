<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PemasukanModel;
use App\Models\PengeluaranModel;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $user_id = Auth::id();
        
        $pemasukan = PemasukanModel::where('user_id', $user_id)->get();
        $pengeluaran = PengeluaranModel::where('user_id', $user_id)->get();
        
        $dates = $pemasukan->pluck('tanggal')->merge($pengeluaran->pluck('tanggal'))->unique()->sort()->values();
        
        $data_pemasukan = $dates->map(function ($date) use ($pemasukan) {
            return $pemasukan->where('tanggal', $date)->sum('jumlah');
        });
        
        $data_pengeluaran = $dates->map(function ($date) use ($pengeluaran) {
            return $pengeluaran->where('tanggal', $date)->sum('jumlah');
        });
        
        return view('dashboard', [
            'dates' => $dates,
            'pemasukan' => $data_pemasukan,
            'pengeluaran' => $data_pengeluaran,
            'total_pemasukan' => $pemasukan->sum('jumlah'),
            'total_pengeluaran' => $pengeluaran->sum('jumlah')
        ]);
    }
}
