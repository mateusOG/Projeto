@extends('layouts.main')

@section('title', 'Produtos')

@section('content') 

@if($busca != '')

    <p>Buscando por : {{ $busca }} </p>

@endif


<a href='/'>Voltar</a>

@endsection