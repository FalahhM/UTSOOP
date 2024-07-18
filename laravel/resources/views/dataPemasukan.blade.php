@extends('template.header')
@section('content')
<h2>Data Pemasukan</h2><br>
<a href="formPemasukan"><button class="btn btn-primary btn-block">Input Data</button></a><br><br>
<table class="table table-bordered table-hovered">
    <tr>
        <th>No</th>
        <th>Sumber</th>
        <th>Jumlah</th>
        <th>Tanggal</th>
        <th>Aksi</th>
    </tr>
    @foreach($data_pemasukan AS $urai)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $urai->sumber }}</td>
        <td>{{ $urai->jumlah }}</td>
        <td>{{ $urai->tanggal }}</td>
        <td>
            <a href="{{ route('editPemasukan', $urai->id) }}"><button class="btn btn-warning">Edit</button></a>
            <form action="{{ route('hapusPemasukan', $urai->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
    <tr>
        <th colspan="2">Total Pemasukan</th>
        <td>{{ $total_pemasukan }}</td>
    </tr>
</table>
@endsection