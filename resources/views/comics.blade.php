@extends('layouts.app')

{{-- se ci basta passare una stringa, non abbiamo bisogno di chiude '@endsection' --}}
@section('title', 'Comics')

@section('content')
    <h1>My Comics</h1>
@endsection

{{-- @section('content2')
    @dump($comics)
    <h1>test</h1>
@endsection --}}

@section('content2')
    @foreach($comics as $comic)
        {{$comic['title']}} - {{$comic['price']}} - {{$comic['series']}} - {{$comic['sale_date']}} - {{$comic['type']}}
        <br/>
    @endforeach
@endsection
