@extends('app')
@section('content')
	<h1>Articles</h1>
	@foreach ($articles as $artical)
		<article>
			<p>{{ $artical->title }}</p>
			<p>{{ $artical->body }}</p>
			<p>{{ $artical->published_at }}</p>
			<hr/>
		</article>
	@endforeach
@stop