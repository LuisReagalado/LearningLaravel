@extends('layout')
@section('title','portafolio')
@section('content')
	<h1>Agrergar Proyecto</h1>


	@include('partials/validation-errors')



	<form method="POST" action="{{route('Projects.store')}}">


		@include('projects._form',['btn'=>'Guardar'])

	</form>
@endsection