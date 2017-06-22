@extends('layouts.app')

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
                        @foreach($news as $berita)
                            <tr>
                                <td><h3><b>{{ $berita->judul }}</b></h3></td>
                            </tr>
                            <tr>
                                <td><img src="{{ $berita->title }}" width="150"> <br>
                                    {{ $berita->isi }}    
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
