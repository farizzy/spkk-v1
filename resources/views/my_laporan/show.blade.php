<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">
                <h3>Laporan Kehilangan</h3>
                <div class="panel-heading">{{ $my_laporan->no_surat_hilang }}</div>
                <table class="table table-responsive" style="border-style: solid;">
                    <thead>
                    <tr>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Nomor Polisi</td>
                        <td>{!! $my_laporan->no_polisi !!}</td>
                    </tr>
                    <tr>
                        <td>Nama Pemilik</td>
                        <td>{{ Auth::user()->name }}</td>
                    </tr>
                    <tr>
                        <td>Jenis Kendaraan</td>
                        <td>{!! $my_laporan->jenis_kendaraan !!}</td>
                    </tr>
                    <tr>
                        <td>Warna</td>
                        <td>{!! $my_laporan->warna_kendaraan !!}</td>
                    </tr>
                    <tr>
                        <td>Nomor Mesin</td>
                        <td>{!! $my_laporan->no_mesin !!}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Kehilangan</td>
                        <td>{!! $my_laporan->tanggal_hilang !!}</td>
                    </tr>
                    <tr>
                        <td>Keterangan</td>
                        <td>{!! $my_laporan->keterangan !!}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
    </div>
</div>
<script>window.print()

</script>
