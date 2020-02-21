@extends('layout')
@section('title','portafolio')
@section('content')
	<h1>portafolio</h1>
	@auth
		<a href="{{ route('Projects.create')}}">Crear nuevo proyecto</a>
	@endauth
	<ul>
		@forelse ($projects as $project)
			<li><a href="{{route('Projects.show',$project)}}">{{$project->title }}</a></li>
		@empty
			<li>No hay nancy</li>
		@endforelse
		{{$projects->links()}}
	</ul>
@endsection