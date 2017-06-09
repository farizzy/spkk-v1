{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('no_surat_hilang', 'No_surat_hilang:') !!}
			{!! Form::text('no_surat_hilang') !!}
		</li>
		<li>
			{!! Form::label('id_daerah', 'Id_daerah:') !!}
			{!! Form::text('id_daerah') !!}
		</li>
		<li>
			{!! Form::label('id_pendaftaran', 'Id_pendaftaran:') !!}
			{!! Form::text('id_pendaftaran') !!}
		</li>
		<li>
			{!! Form::label('no_polisi', 'No_polisi:') !!}
			{!! Form::text('no_polisi') !!}
		</li>
		<li>
			{!! Form::label('jenis_kendaraan', 'Jenis_kendaraan:') !!}
			{!! Form::text('jenis_kendaraan') !!}
		</li>
		<li>
			{!! Form::label('merk_kendaraan', 'Merk_kendaraan:') !!}
			{!! Form::text('merk_kendaraan') !!}
		</li>
		<li>
			{!! Form::label('warna_kendaraan', 'Warna_kendaraan:') !!}
			{!! Form::text('warna_kendaraan') !!}
		</li>
		<li>
			{!! Form::label('no_mesin', 'No_mesin:') !!}
			{!! Form::text('no_mesin') !!}
		</li>
		<li>
			{!! Form::label('tanggal_hilang', 'Tanggal_hilang:') !!}
			{!! Form::text('tanggal_hilang') !!}
		</li>
		<li>
			{!! Form::label('keterangan', 'Keterangan:') !!}
			{!! Form::text('keterangan') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}