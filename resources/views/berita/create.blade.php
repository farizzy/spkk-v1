@extends('layouts.apps')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Berita</div>

                <div class="panel-body">
                    
                    {!! Form::open(array('route'=>'berita.store', 'files'=>true)) !!} 
                        <div class="form-group">
                            {!! Form::label('Judul','Judul') !!}
                            {!! Form::text('judul', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Isi','Isi') !!}
                            {!! Form::textarea('isi', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Image','Image') !!}
                            {!! Form::file('image', null, ['class'=>'form-control']) !!}
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
