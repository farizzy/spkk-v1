@extends('layouts.apps')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">
                <div class="panel-heading">{{ $daerah_rawan->nama }}</div>

                <div class="panel-body">
                    {{ $daerah_rawan->deskripsi }}
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
