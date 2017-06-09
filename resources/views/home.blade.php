@extends('layouts.app')

@section('content')
<div class="container">
    <nav class="navbar navbar-default sidebar" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">     
            </div>
            <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                <ul class="nav navbar-nav">      
                    <li><a href="{{ url('/user_lk') }}">Laporan Kehilangan<span style="font-size:16px;" class="pull-right hidden-xs showopacity "></span></a></li>        
                    <li><a href="{{ url('/guest_pk') }}">Temuan Kendaraan<span style="font-size:16px;" class="pull-right hidden-xs showopacity "></span></a></li>
                    <li><a href="{{ url('/guest_berita') }}">Berita<span style="font-size:16px;" class="pull-right hidden-xs showopacity "></span></a></li><li><a href="{{ url('/my_laporan') }}">Laporan Saya<span style="font-size:16px;" class="pull-right hidden-xs showopacity "></span></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="row">
        <h1 class="text-center">
            Selamat Datang {{ Auth::user()->name }}!
        </h1>
    </div>
</div>
@endsection
