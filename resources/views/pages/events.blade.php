@extends('layouts/main', ['title' => 'Events'])

@section('content')

<h1>Events</h1>
<ul>
    @foreach ($events as $event)
        <li>{{ $event }}</li>
    @endforeach
</ul>

@endsection
