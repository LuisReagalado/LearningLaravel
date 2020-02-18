@extends('layout')
@section('title','portafolio')
@section('content')
	<h1>portafolio</h1>
	<ul>
		@forelse ($portafolio as $portafolioItem)
			<li>{{$portafolioItem['title'] }}</li>
		@empty
			<li>No hay nancy</li>
		@endforelse
	</ul>
@endsection