@extends('layouts.apps')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            @if(Session::has('message'))
                <div class="alert alert-success">{{ Session::get('message') }}</div>
            @endif

            <div class="panel panel-default">
                <div class="panel-heading">Berita</div>

                <div class="panel-body">
                    <table class="table news" id="news">
                        {{ link_to_route('berita.create', 'Tambahkan Berita', null, ['class'=>'btn btn-success']) }}
                        @foreach($news as $berita)
                            <tr>
                                <td><h3><b>{{ $berita->judul }}</b></h3></td>
                            </tr>
                            <tr>
                                <td><img src="{{ $berita->title }}" width="150"> <br>
                                    {{ $berita->isi }}
                                    {!! Form::open(array('route'=>['berita.destroy', $berita->id], 'method'=>'DELETE')) !!}
                                        {{ link_to_route('berita.edit', 'Edit', [$berita->id], ['class'=>'btn btn-default']) }}
                                        |
                                        {!! Form::button('Hapus',['class'=>'btn btn-danger', 'type'=>'submit']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            
                        @endforeach
                    </table>
                </div>
            </div>

            
        </div>
    </div>
</div>

@endsection
