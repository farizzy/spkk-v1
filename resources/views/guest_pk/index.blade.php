@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            @if(Session::has('message'))
                <div class="alert alert-success">{{ Session::get('message') }}</div>
            @endif

            <div class="panel panel-default">
                <div class="panel-heading">Penemuan Kendaraan</div>

                <div class="panel-body">
                    <table class="table">
                            <th>No Polisi</th>
                            <th>Jenis</th>
                            <th>Merk</th>
                            <th>Warna</th>
                            <th>Tanggal Ditemukan</th>
                            <th>Keterangan</th>
                            <th>Status</th>
                        </tr>
                        @foreach($ditemukan as $penemuan)
                            <tr>
                                <td>{{ $penemuan->no_polisi_temuan }}</td>
                                <td>{{ $penemuan->jenis_temuan }}</td>
                                <td>{{ $penemuan->merk_temuan }}</td>
                                <td>{{ $penemuan->warna_temuan }}</td>
                                <td>{{ $penemuan->tanggal_temuan }}</td>
                                <td>{{ $penemuan->deskripsi_temuan }}</td>
                                @if ($penemuan->status === 1)
                                    <td><p class="text-success">Telah Diambil</p></td>
                                @else
                                    <td><p class="text-warning">Belum Diambil</p></td>
                                @endif
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
