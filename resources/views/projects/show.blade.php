@extends('layout')
@section('title','Portafolio |' .$project->title)
@section('content')

	<h1>{{$project->title}}</h1>
	<p>{{$project->description}}</p>
	<p>{{$project->created_at->diffForHumans() }}</p>
	@auth
		<a href="{{route('Projects.edit',$project)}}">Editar este proyecto</a>
	@endauth
	<form method="POST" action="{{ route('Projects.destroy',$project)}}">
		@csrf @method('DELETE')
	@auth
		<button>Eliminar</button>
	@endauth
	</form>
@endsection