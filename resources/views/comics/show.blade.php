@extends('layouts.app')

@section('page-title')
    {{ $comic->title }}
@endsection

@section('page-content')
    <h1>{{ $comic->title }}</h1>
    <p>{{ $comic->description }}</p>
    <div>
        Prezzo: <strong>{{ $comic->price }}€</strong>
    </div>
@endsection