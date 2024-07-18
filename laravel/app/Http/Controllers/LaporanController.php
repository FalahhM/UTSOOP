<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PemasukanModel;
use App\Models\PengeluaranModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class LaporanController extends Controller
{
    public function formLaporan()
    {
        $data['judul'] = "Form Laporan";
        return view('formLaporan', $data);
    }

    public function hitungLaporan(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $start_date = Carbon::parse($request->start_date);
        $end_date = Carbon::parse($request->end_date);

        $userId = Auth::id();

        $total_pemasukan = PemasukanModel::where('user_id', $userId)
            ->whereBetween('tanggal', [$start_date, $end_date])
            ->sum('jumlah');

        $total_pengeluaran = PengeluaranModel::where('user_id', $userId)
            ->whereBetween('tanggal', [$start_date, $end_date])
            ->sum('jumlah');

        $untung_rugi = $total_pemasukan - $total_pengeluaran;

        return view('hasilLaporan', compact('total_pemasukan', 'total_pengeluaran', 'untung_rugi', 'start_date', 'end_date'));
    }
}
