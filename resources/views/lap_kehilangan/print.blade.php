<!DOCTYPE html>
<html>
<head>
	<title>Laporan Kehilangan</title>
</head>
<body>
	<table>
		<tr>
			<th>Laporan kehilangan</th>
		</tr>
		<tr>
            <td>Nomor Polisi</td>
            <td>{!! $lap_kehilangan->no_polisi !!}</td>
        </tr>
        <tr>
            <td>Jenis Kendaraan</td>
            <td>{!! $lap_kehilangan->jenis_kendaraan !!}</td>
        </tr>
        <tr>
            <td>Warna</td>
            <td>{!! $lap_kehilangan->warna_kendaraan !!}</td>
        </tr>
        <tr>
            <td>Nomor Mesin</td>
            <td>{!! $lap_kehilangan->no_mesin !!}</td>
        </tr>
        <tr>
            <td>Tanggal Kehilangan</td>
            <td>{!! $lap_kehilangan->tanggal_hilang !!}</td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>{!! $lap_kehilangan->keterangan !!}</td>
        </tr>
	</table>
</body>
</html>