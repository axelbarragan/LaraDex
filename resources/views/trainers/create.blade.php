@extends('layouts.app')

@section('title', 'Trainers Create')
@section('content')
<form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<div class="form-group">
		<label for="">Nombre</label>
		<input type="text" name="name" class="form-control"></input>
	</div>

	<div class="form-group">
		<label for="">Avatar</label>
		<input type="file" name="avatar"></input>
	</div>

	<button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection