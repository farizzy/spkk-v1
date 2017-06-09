@extends('layouts.apps')

@section('content')
<div class="container">
	<nav class="navbar navbar-default sidebar" role="navigation">
	    <div class="container-fluid">
		    <div class="navbar-header">     
		    </div>
		    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
		      	<ul class="nav navbar-nav">
			        <li class="active"><a href="{{ url('/daerah_rawan') }}">Daerah Rawan<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>       
			        <li><a href="{{ url('/lap_kehilangan') }}">Laporan Kehilangan<span style="font-size:16px;" class="pull-right hidden-xs showopacity "></span></a></li>        
			        <li><a href="{{ url('/penemuan') }}">Temuan Kendaraan<span style="font-size:16px;" class="pull-right hidden-xs showopacity "></span></a></li>
			        <li><a href="{{ url('/berita') }}">Berita<span style="font-size:16px;" class="pull-right hidden-xs showopacity "></span></a></li>
		      	</ul>
		    </div>
	  	</div>
	</nav>
    <div class="row">
        <h1 class="text-center">
            Selamat Datang!
        </h1>
    </div>
</div>
@endsection
