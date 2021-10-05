@extends('layouts.main')

@section('title', 'Criar evento')

@section('content') 

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>
    <form action="\events" method="POST">
        @csrf
        <div class="form-gruop">
            <label for="title">Evento</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento"> 
        </div>
        <div class="form-gruop">
            <label for="title">Cidade</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento"> 
        </div>
        <div class="form-gruop">
            <label for="title">O evento e privado?</label>
            <select name="pricate" id="private" class="form-control">
                <option value="0">Nao</option>
                <option value="1">sim</option>
            </select>
        </div>
        <div class="form-gruop">
            <label for="title">Descricao:</label>
            <textarea name="description" id="description" class="form-control" placeholder="O que ira acontecer no evento?"></textarea> 
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>
</div>


@endsection