@extends('template.header')
@section('content')

<h2>Edit Pemasukan</h2><br>
<form method="POST" action="{{ route('updatePemasukan', $data->id) }}">
    @csrf
    <table>
        <tr>
            <td>Jumlah Pemasukan</td>
            <td></td>
            <td><input type="number" name="jumlah" value="{{ $data->jumlah }}"></td>
        </tr>
        <tr>
            <td>Sumber</td>
            <td></td>
            <td><input type="text" name="sumber" value="{{ $data->sumber }}"></td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td></td>
            <td><input type="date" name="tanggal" value="{{ $data->tanggal }}"></td>
        </tr>
    </table><br>
    <button type="submit" class="btn btn-success" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: 2rem; --bs-btn-font-size: .90rem;">Update</button>
</form>
@endsection
