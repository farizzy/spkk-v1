{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('nama', 'Nama:') !!}
			{!! Form::text('nama') !!}
		</li>
		<li>
			{!! Form::label('deskripsi', 'Deskripsi:') !!}
			{!! Form::text('deskripsi') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}