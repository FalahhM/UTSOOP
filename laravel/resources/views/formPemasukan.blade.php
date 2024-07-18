@extends('template.header')
@section('content')
<h2>Input Pemasukan</h2><br>
<form method="POST" action="{{ route('simpanPemasukan') }}">
    @csrf
    <table>
        <tr>
            <td>Jumlah Pemasukan</td>
            <td></td>
            <td><input type="number" name="jumlah"></td>
        </tr>
        <tr>
            <td>Sumber</td>
            <td></td>
            <td><input type="text" name="sumber"></td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td></td>
            <td><input type="date" name="tanggal"></td>
        </tr>
    </table><br>
    <button type="submit" class="btn btn-success" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: 2rem; --bs-btn-font-size: .90rem;">Simpan</button>
</form>

@endsection