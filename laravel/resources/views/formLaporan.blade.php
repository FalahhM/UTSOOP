@extends('template.header')
@section('content')
<h1>Laporan</h1><br>
<form method="POST" action="{{ route('hitungLaporan') }}">
    @csrf
    <table>
        <tr>
            <td>Mulai Tanggal</td>
            <td></td>
            <td><input type="date" name="start_date" required></td>
        </tr>
        <tr>
            <td>Sampai Tanggal</td>
            <td></td>
            <td><input type="date" name="end_date" required></td>
        </tr>
    </table><br>
     <button type="submit" class="btn btn-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: 2rem; --bs-btn-font-size: .90rem;">Laporan</button>
</form>
@endsection
