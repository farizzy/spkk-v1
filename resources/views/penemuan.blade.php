{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('id_lap_kehilangan', 'Id_lap_kehilangan:') !!}
			{!! Form::text('id_lap_kehilangan') !!}
		</li>
		<li>
			{!! Form::label('no_polisi_temuan', 'No_polisi_temuan:') !!}
			{!! Form::text('no_polisi_temuan') !!}
		</li>
		<li>
			{!! Form::label('tanggal_temuan', 'Tanggal_temuan:') !!}
			{!! Form::text('tanggal_temuan') !!}
		</li>
		<li>
			{!! Form::label('foto', 'Foto:') !!}
			{!! Form::text('foto') !!}
		</li>
		<li>
			{!! Form::label('jenis_temuan', 'Jenis_temuan:') !!}
			{!! Form::text('jenis_temuan') !!}
		</li>
		<li>
			{!! Form::label('merk_temuan', 'Merk_temuan:') !!}
			{!! Form::text('merk_temuan') !!}
		</li>
		<li>
			{!! Form::label('warna_temuan', 'Warna_temuan:') !!}
			{!! Form::text('warna_temuan') !!}
		</li>
		<li>
			{!! Form::label('no_mesin_temuan', 'No_mesin_temuan:') !!}
			{!! Form::text('no_mesin_temuan') !!}
		</li>
		<li>
			{!! Form::label('deskripsi_temuan', 'Deskripsi_temuan:') !!}
			{!! Form::text('deskripsi_temuan') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}