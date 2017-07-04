@extends('layouts.apps')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Buat Berita Penemuan Kendaraan</div>

                <div class="panel-body">
                    
                    {!! Form::open(array('route'=>'penemuan.store')) !!} 
                        <div class="form-group">
                            {!! Form::label('Nomor Surat Penemuan','Nomor Surat') !!}
                            {!! Form::text('no_surat_hilang', $suratpenemuan, ['class'=>'form-control', 'readonly'=>'readonly']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::hidden('id_lap_kehilangan', $test->id_lap_kehilangan, ['class'=>'form-control']) !!}
                            <input class="form-control" name="status_penemuan" type="hidden" value="0">
                        </div>
                        <div class="form-group">
                            {!! Form::label('Laporan Kehilangan yang Bersangkutan','Laporan Kehilangan yang Bersangkutan') !!}
                            {!! Form::text(null, $test->no_surat_hilang, ['class'=>'form-control', 'readonly'=>'readonly']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('No Polisi','No Polisi') !!}
                            {!! Form::text('no_polisi_temuan', $test->no_polisi, ['class'=>'form-control', 'readonly'=>'readonly']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('No Mesin','No Mesin') !!}
                            {!! Form::text('no_mesin_temuan', $test->no_mesin, ['class'=>'form-control', 'readonly'=>'readonly']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Jenis Temuan','Jenis Temuan') !!}
                            {!! Form::text('jenis_temuan', $test->jenis_kendaraan, ['class'=>'form-control', 'readonly'=>'readonly']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Merk Temuan','Merk Temuan') !!}
                            {!! Form::text('merk_temuan', $test->merk_kendaraan, ['class'=>'form-control', 'readonly'=>'readonly']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Warna Temuan','Warna Temuan') !!}
                            {!! Form::text('warna_temuan', $test->warna_kendaraan, ['class'=>'form-control', 'readonly'=>'readonly']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Tanggal Ditemukan','Tanggal Ditemukan') !!}
                            {!! Form::date('tanggal_temuan', \Carbon\Carbon::now(), ['class'=>'form-control']); !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Deskripsi','Deskripsi') !!}
                            {!! Form::textarea('deskripsi_temuan', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::button('Buat',['type'=>'submit','class'=>'btn btn-primary']) !!}
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
