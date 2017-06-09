{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('id_lap_kehilangan', 'Id_lap_kehilangan:') !!}
			{!! Form::text('id_lap_kehilangan') !!}
		</li>
		<li>
			{!! Form::label('id_pendaftaran', 'Id_pendaftaran:') !!}
			{!! Form::text('id_pendaftaran') !!}
		</li>
		<li>
			{!! Form::label('saran_komentar', 'Saran_komentar:') !!}
			{!! Form::text('saran_komentar') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}