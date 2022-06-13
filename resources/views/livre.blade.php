@extends('layouts.app')



@section('main')
    <h1>{{ $livres->titre }}</h1>
    <p>{{ $livres->extrait }}</p>
@endsection
