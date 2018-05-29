@extends('layouts.app')

@section('title', 'Trainers Create')
@section('content')
<form class="form-group" method="POST" action="/trainers">
	<div class="form-group">
		<input type="hidden" name="_token" value="{{ csrf_token() }}"
		<label for="">Nombre</label>
		<input type="text" name="name" class="form-control"></input>
	</div>
	<button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection