@extends('layouts.main')

@section('title, Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu Evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Imagem do Evento:</label>
            <input type="file" name="image" class="form-control-file" id="image">
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Nome do Evento">
        </div>
        <div class="form-group">
            <label for="title">Data do Evento:</label>
            <input type="date" name="date" class="form-control" id="date">
        </div>
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" name="city" class="form-control" id="city" placeholder="Local do Evento">
        </div>
        <div class="form-group">
            <label for="title">O evento é privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
        </div>
        <div class="form-group">
            <label for="title">Adicione items de infraestrutura:</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cadeiras" id=""> Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Palco" id=""> Palco
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Alimentação" id="">Alimentação
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Transporte" id="">Transporte
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>
</div>

@endsection