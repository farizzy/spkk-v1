@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Laporkan Kehilangan</div>

                <div class="panel-body">
                    
                    {!! Form::open(array('route'=>'user_lk.store')) !!} 
                        <div class="form-group">
                            {!! Form::label('Nomor Surat','Nomor Surat') !!}
                            {!! Form::text('no_surat_hilang', $nomorsurat, ['class'=>'form-control', 'readonly'=>'readonly']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Nama Lengkap','Nama Lengkap') !!}
                            {!! Form::text('nama_lengkap', Auth::user()->nama_lengkap, ['class'=>'form-control', 'readonly'=>'readonly']) !!}
                        </div>
                        <div class="form-group" hidden>
                            {!! Form::label('Nama Lengkap','Nama Lengkap') !!}
                            {!! Form::text('id_pendaftaran', Auth::user()->id, ['class'=>'form-control', 'readonly'=>'readonly']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Deskripsi','Deskripsi') !!}
                            {!! Form::textarea('keterangan', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Daerah Kehilangan','Daerah Kehilangan') !!}
                            {!! Form::select('id_daerah', $daerah, null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('No Polisi','No Polisi') !!}
                            {!! Form::text('no_polisi', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('No Mesin','No Mesin') !!}
                            {!! Form::text('no_mesin', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Jenis Kendaraan','Jenis Kendaraan') !!}
                            {!! Form::text('jenis_kendaraan', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Merk','Merk') !!}
                            {!! Form::text('merk_kendaraan', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Warna','Warna') !!}
                            {!! Form::text('warna_kendaraan', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Tanggal Hilang','Tanggal Hilang') !!}
                            {!! Form::date('tanggal_hilang', \Carbon\Carbon::now()); !!}
                        </div>
                        <div class="form-group">
                            {!! Form::button('Create',['type'=>'submit','class'=>'btn btn-primary']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>

            @if($errors->has())
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

        </div>
    </div>
</div>
@endsection
