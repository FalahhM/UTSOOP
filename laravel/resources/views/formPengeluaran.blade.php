@extends('template.header')
@section('content')
<h2>Input Pengeluaran</h2><br>
<form method="POST" action="{{ route('simpanPengeluaran') }}">
    @csrf
    <table>
        <tr>
            <td>Jumlah Pengeluaran</td>
            <td></td>
            <td><input type="number" name="jumlah"></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td></td>
            <td><input type="text" name="keterangan"></td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td></td>
            <td><input type="date" name="tanggal"></td>
        </tr>
    </table><br>
    <button type="submit" class="btn btn-success" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: 2rem; --bs-btn-font-size: .90rem;">Kirim</button>
</form>

@endsection