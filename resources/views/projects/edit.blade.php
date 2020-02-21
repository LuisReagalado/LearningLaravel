@extends('layout')
@section('title','portafolio')
@section('content')
	<h1>Agrergar Proyecto</h1>


	@include('partials/validation-errors')


	<form method="POST" action="{{route('Projects.update',$project)}}">


		 @method('PUT')


		 @include('projects._form',['btn'=>'Actualizar'])


	</form>
@endsection