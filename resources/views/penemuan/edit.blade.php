@extends('layouts.apps')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Berita Penemuan Kendaraan</div>

                <div class="panel-body">
                    
                    {!! Form::model($penemuan, array('route'=>['penemuan.update',$penemuan->id_penemuan], 'method'=>'PUT')) !!} 
                        <div class="form-group">
                            {!! Form::label('No Polisi','No Polisi') !!}
                            {!! Form::text('no_polisi_temuan', null, ['class'=>'form-control', 'readonly'=>'readonly']) !!}
                        </div>
                        <div class="form-group" hidden>
                            {!! Form::label('No Polisi','No Polisi') !!}
                            {!! Form::text('id_lap_kehilangan', null, ['class'=>'form-control', 'readonly'=>'readonly']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('No Mesin','No Mesin') !!}
                            {!! Form::text('no_mesin_temuan', null, ['class'=>'form-control', 'readonly'=>'readonly']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Jenis Temuan','Jenis Temuan') !!}
                            {!! Form::text('jenis_temuan', null, ['class'=>'form-control', 'readonly'=>'readonly']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Merk Temuan','Merk Temuan') !!}
                            {!! Form::text('merk_temuan', null, ['class'=>'form-control', 'readonly'=>'readonly']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Warna Temuan','Warna Temuan') !!}
                            {!! Form::text('warna_temuan', null, ['class'=>'form-control', 'readonly'=>'readonly']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Tanggal Ditemukan','Tanggal Ditemukan') !!}
                            {!! Form::date('tanggal_temuan', \Carbon\Carbon::now(), ['class'=>'form-control', 'readonly'=>'readonly']); !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Deskripsi','Deskripsi') !!}
                            {!! Form::textarea('deskripsi_temuan', null, ['class'=>'form-control', 'readonly'=>'readonly']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::button('Telah Diambil',['type'=>'submit','class'=>'btn btn-success']) !!}
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
