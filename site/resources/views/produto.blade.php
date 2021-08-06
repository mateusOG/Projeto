@extends('layouts.main')

@section('title', 'Produto')

@section('content') 

@if($id != null)

    <p>ID do produto {{$id}}</p>

@endif

<p>Produto nao encontrado</p>



<a href='/'>Voltar</a>

@endsection