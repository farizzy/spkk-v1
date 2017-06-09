@extends('layouts.apps')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            @if(Session::has('message'))
                <div class="alert alert-success">{{ Session::get('message') }}</div>
            @endif

            <div class="panel panel-default">
                <div class="panel-heading">Daerah Rawan</div>

                <div class="panel-body">
                    <table class="table daerahrawan" id="daerahrawan">
                        <tr>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach($daerahrawan as $daerah_rawan)
                            <tr>
                                <td>{{ link_to_route('daerah_rawan.show', $daerah_rawan->nama,[$daerah_rawan->id_daerah]) }}</td>
                                <td>{{ $daerah_rawan->deskripsi }}</td>
                                <td>
                                    {!! Form::open(array('route'=>['daerah_rawan.destroy', $daerah_rawan->id_daerah], 'method'=>'DELETE')) !!}
                                        {{ link_to_route('daerah_rawan.edit', 'Edit', [$daerah_rawan->id_daerah], ['class'=>'btn btn-default']) }}
                                        |
                                        {!! Form::button('Hapus',['class'=>'btn btn-danger', 'type'=>'submit']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>

            {{ link_to_route('daerah_rawan.create', 'Tambahkan Daerah', null, ['class'=>'btn btn-success']) }}
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#daerahrawan').DataTable();
    } );
</script>
@endsection
