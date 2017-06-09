@extends('layouts.apps')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            @if(Session::has('message'))
                <div class="alert alert-success">{{ Session::get('message') }}</div>
            @endif

            <div class="panel panel-default">
                <div class="panel-heading">Laporan Kehilangan</div>

                <div class="panel-body">

                    {!! Form::open(['method'=>'GET','url'=>'lap_kehilangan','class'=>'navbar-form navbar-left','role'=>'search'])  !!}
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
                        <tr>
                            <th>Nomor Surat</th>
                            <th>Daerah</th>
                            <th>Pelapor</th>
                            <th>No Polisi</th>
                            <th>Jenis</th>
                            <th>Merk</th>
                            <th>Warna</th>
                            <th>Tanggal Hilang</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach($lapkehilangan as $lap_kehilangan)
                            <tr>
                                <td>{{ link_to_route('lap_kehilangan.show', $lap_kehilangan->no_surat_hilang,[$lap_kehilangan->id_lap_kehilangan, $lap_kehilangan->id_daerah]) }}</td>
                                <td>{{ $lap_kehilangan->deskripsi }}</td>
                                <td>{{ $lap_kehilangan->nama_lengkap }}</td>
                                <td>{{ $lap_kehilangan->no_polisi }}</td>
                                <td>{{ $lap_kehilangan->jenis_kendaraan }}</td>
                                <td>{{ $lap_kehilangan->merk_kendaraan }}</td>
                                <td>{{ $lap_kehilangan->warna_kendaraan }}</td>
                                <td>{{ $lap_kehilangan->tanggal_hilang }}</td>
                                <td>
                                    {!! Form::open(array('route'=>['lap_kehilangan.destroy', $lap_kehilangan->id_lap_kehilangan], 'method'=>'DELETE')) !!}
                                        {!! Form::button('Hapus',['class'=>'btn btn-danger', 'type'=>'submit']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>

            {{ link_to_route('lap_kehilangan.create', 'Laporkan Kehilangan', null, ['class'=>'btn btn-success']) }}
        </div>
    </div>
</div>
@endsection
