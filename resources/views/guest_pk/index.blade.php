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

                    {!! Form::open(['method'=>'GET','url'=>'guest_pk','class'=>'navbar-form navbar-left','role'=>'search'])  !!}
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" name="search" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default-sm" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    {!! Form::close() !!}

                    <table class="table">
                            <th>No Polisi</th>
                            <th>Jenis</th>
                            <th>Merk</th>
                            <th>Warna</th>
                            <th>Pengambil</th>
                            <th>Tanggal Diambil</th>
                            <th>Keterangan</th>
                            <th>Status</th>
                        @if ($hasil === 0)
                            <tr>
                                <td colspan="10" align="center"><h4 class="text-success">Data tidak ditemukan</h4></td>
                            </tr>
                        @endif
                        @foreach($ditemukan as $penemuan)
                            <tr>
                                <td>{{ $penemuan->no_polisi_temuan }}</td>
                                <td>{{ $penemuan->jenis_temuan }}</td>
                                <td>{{ $penemuan->merk_temuan }}</td>
                                <td>{{ $penemuan->warna_temuan }}</td>
                                <td>{{ $penemuan->nama_pengambil }}</td>
                                <td>{{ $penemuan->tgl_diambil }}</td>
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
