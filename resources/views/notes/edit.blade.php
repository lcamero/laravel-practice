@extends('layout')

@section('content')
	<h2>Edit Note</h2>
	<form action="/notes/{{ $note->id }}" method="POST">
			{{ csrf_field() }}
			{{ method_field('PATCH') }}
			<div class="form-group">
				<textarea name="body" class="form-control">{{ $note->body}}</textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Update Note</button>
			</div>
			</form>

@stop