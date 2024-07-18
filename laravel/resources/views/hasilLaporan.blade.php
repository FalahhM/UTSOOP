@extends('template.header')
@section('content')
<h3>Hasil Laporan</h3><br>
<h6>Tanggal Mulai: {{ $start_date->toDateString() }}</h6>
<h6>Tanggal Akhir: {{ $end_date->toDateString() }}</h6>
<table class="table table-bordered table-hovered">
    <tr>
        <td>Total Pemasukan</td>
        <td>{{ $total_pemasukan }}</td>
    </tr>
    <tr>
        <td>Total Pengeluaran</td>
        <td>{{ $total_pengeluaran }}</td>
    </tr>
    <tr>
        <td>Hasil</td>
        <td>{{ $untung_rugi }}</td>
    </tr>
</table>
Note : Bila hasil nya (-), berarti rugi
@endsection
