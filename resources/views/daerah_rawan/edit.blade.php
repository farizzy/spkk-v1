@extends('layouts.apps')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Daerah Rawan</div>

                <div class="panel-body">
                    
                    {!! Form::model($daerah_rawan, array('route'=>['daerah_rawan.update',$daerah_rawan->id_daerah], 'method'=>'PUT')) !!} 
                        <div class="form-group">
                            {!! Form::label('Nama','Masukkan Nama Daerah') !!}
                            {!! Form::text('nama', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Deskripsi','Masukkan Deskripsi Daerah') !!}
                            {!! Form::textarea('deskripsi', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::button('Update',['type'=>'submit','class'=>'btn btn-primary']) !!}
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
