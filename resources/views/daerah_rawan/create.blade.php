@extends('layouts.apps')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Daerah Rawan</div>

                <div class="panel-body">
                    
                    {!! Form::open(array('route'=>'daerah_rawan.store')) !!} 
                        <div class="form-group">
                            {!! Form::label('Nama','Nama Daerah') !!}
                            {!! Form::text('nama', null, ['class'=>'form-control']) !!}
                        </div>
                        <!--Menggunakan list dari database-->
                        <!--<div class="form-group">
                            {!! Form::label('Daerah', 'Daerah') !!}
                            {!! Form::select('deskripsi', $daerah, null, ['class'=>'form-control']) !!}
                        </div>-->
                        <div class="form-group">
                            {!! Form::label('Deskripsi','Deskripsi') !!}
                            {!! Form::textarea('deskripsi', null, ['class'=>'form-control']) !!}
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
