@extends('layouts.master')


@section('content')
@include('partials.jumbotron')

<div class="container">
    <h2>Current Series</h2>
<div class="series-container">
    @foreach ($comics as $comic )
    <x-card :comic="$comic" />    
    @endforeach
</div>
</div>

@endsection

