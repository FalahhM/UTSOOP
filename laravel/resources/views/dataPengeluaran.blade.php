@extends('template.header')
@section('content')
<h2>Data Pengeluaran</h2><br>
<a href="formPengeluaran"><button class="btn btn-primary btn-block">Input Data</button></a><br><br>
<table class="table table-bordered table-hovered">
    <tr>
        <th>No</th>
        <th>Keterangan</th>
        <th>Jumlah</th>
        <th>Tanggal</th>
        <th>Aksi</th>
    </tr>
    @foreach($data_pengeluaran AS $urai)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $urai->keterangan }}</td>
        <td>{{ $urai->jumlah }}</td>
        <td>{{ $urai->tanggal }}</td>
        <td>
            <a href="{{ route('editPengeluaran', $urai->id) }}"><button class="btn btn-warning">Edit</button></a>
            <form action="{{ route('hapusPengeluaran', $urai->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
    <tr>
        <th colspan="2">Total Pengeluaran</th>
        <td>{{ $total_pengeluaran }}</td>
    </tr>
</table>
@endsection