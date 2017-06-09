{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('nama_lengkap', 'Nama_lengkap:') !!}
			{!! Form::text('nama_lengkap') !!}
		</li>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('password', 'Password:') !!}
			{!! Form::text('password') !!}
		</li>
		<li>
			{!! Form::label('email', 'Email:') !!}
			{!! Form::text('email') !!}
		</li>
		<li>
			{!! Form::label('jk', 'Jk:') !!}
			{!! Form::text('jk') !!}
		</li>
		<li>
			{!! Form::label('alamat', 'Alamat:') !!}
			{!! Form::text('alamat') !!}
		</li>
		<li>
			{!! Form::label('is_admin', 'Is_admin:') !!}
			{!! Form::text('is_admin') !!}
		</li>
		<li>
			{!! Form::label('rememberToken', 'RememberToken:') !!}
			{!! Form::text('rememberToken') !!}
		</li>
		<li>
			{!! Form::label('created_at', 'Created_at:') !!}
			{!! Form::text('created_at') !!}
		</li>
		<li>
			{!! Form::label('updated_at', 'Updated_at:') !!}
			{!! Form::text('updated_at') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}