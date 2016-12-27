@extends('layout')

@section('content')
<h1>All cards</h1>
@foreach ($cards as $card)
<div>
	<li>{{ $card }}</li>
</div>
@endforeach
@stop