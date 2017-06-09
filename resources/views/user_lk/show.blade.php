@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">
                <div class="panel-heading">{{ $user_lk->no_surat_hilang }}</div>
                <table class="table table-responsive" style="border:none;">
                    <thead>
                    <tr>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Nomor Polisi</td>
                        <td>{!! $user_lk->no_polisi !!}</td>
                    </tr>
                    <tr>
                        <td>Jenis Kendaraan</td>
                        <td>{!! $user_lk->jenis_kendaraan !!}</td>
                    </tr>
                    <tr>
                        <td>Warna</td>
                        <td>{!! $user_lk->warna_kendaraan !!}</td>
                    </tr>
                    <tr>
                        <td>Nomor Mesin</td>
                        <td>{!! $user_lk->no_mesin !!}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Kehilangan</td>
                        <td>{!! $user_lk->tanggal_hilang !!}</td>
                    </tr>
                    <tr>
                        <td>Keterangan</td>
                        <td>{!! $user_lk->keterangan !!}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div><b>Komentar:</b></div>
                <?php $komentar = DB::table('saran_komentar')
                        ->leftJoin('lap_kehilangan', 'saran_komentar.id_lap_kehilangan', '=', 'lap_kehilangan.id_lap_kehilangan')
                        ->leftJoin('users', 'saran_komentar.id_pendaftaran', '=', 'users.id')
                        ->whereRaw('lap_kehilangan.id_lap_kehilangan = ?', [$user_lk->id_lap_kehilangan])
                        ->get(); 
                    $pengirim = Auth::user()->name;
                    $idpengirim = Auth::user()->id;
                    $idlaporan = $user_lk->id_lap_kehilangan;
                        ?>

                            <table class="table table-responsive" style="border:none;">
                                @foreach ($komentar as $abc)
                                <tr>
                                    <td>
                                        {{ $abc->saran_komentar }} <sup><i>by <b> {{ $abc->nama_lengkap }}</b></i></sup>
                                    </td>
                                </tr>
                                @endforeach
                            </table>

                <div class="panel-body col-md-5">
                    <form action = "/create" method = "post">
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                    
                        <table>
                            <tr>
                                <td>Nama</td>
                                <td><input class="form-control" type='text' name='nama' value="<?php echo $pengirim;?>" readonly/></td>
                            </tr>
                            <tr hidden>
                                <td>ID Pengirim</td>
                                <td><input class="form-control" type='text' name='id_pendaftaran' value="<?php echo $idpengirim; ?>" readonly/></td>
                            </tr>
                            <tr hidden>
                                <td>ID Laporan</td>
                                <td><input class="form-control" type='text' name='id_lap_kehilangan' value="<?php echo $idlaporan; ?>" readonly/></td>
                            </tr>
                            <tr>
                                <td>Komentar</td>
                                <td><textarea cols="50" rows="5" class="form-control" type='text' name='komentar'></textarea></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan = '1'>
                                    <input class="btn btn-primary" type = 'submit' value = "Komentari"/>
                                </td>
                            </tr>
                        </table>
                            
                    </form>

                </div>
    </div>
</div>
@endsection
