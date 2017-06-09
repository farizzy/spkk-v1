@extends('layouts.apps')

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
                        <tr>
                            <th>Nomor Surat</th>
                            <th>No Polisi</th>
                            <th>Jenis</th>
                            <th>Merk</th>
                            <th>Warna</th>
                            <th>Tanggal Ditemukan</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach($ditemukan as $penemuan)
                            <tr>
                                <td>{{ link_to_route('penemuan.show', $penemuan->no_surat_hilang,[$penemuan->id_penemuan]) }}</td>
                                <td>{{ $penemuan->no_polisi_temuan }}</td>
                                <td>{{ $penemuan->jenis_temuan }}</td>
                                <td>{{ $penemuan->merk_temuan }}</td>
                                <td>{{ $penemuan->warna_temuan }}</td>
                                <td>{{ $penemuan->tanggal_temuan }}</td>
                                <td>
                                    {!! Form::open(array('route'=>['penemuan.destroy', $penemuan->id_penemuan], 'method'=>'DELETE')) !!}
                                        {!! Form::button('Hapus',['class'=>'btn btn-danger', 'type'=>'submit']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>

            {{ link_to_route('penemuan.create', 'Laporkan Kehilangan', null, ['class'=>'btn btn-success']) }}
        </div>
    </div>
</div>
@endsection