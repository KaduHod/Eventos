@extends('layouts.main')


@section('tittle', 'Create')


@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie um evento</h1>
        <form action="/events" method='post' enctype='multipart/form-data'>
            @csrf <!-- Diretiva que previne ataques a formulários-->
            <div class="form-group">
                <label for="image">
                    Imagem do Evento:
                </label>
                <input type='file' id='image' name='image' class="form-control-file">
            </div>
            <div class="form-group">
                <label for="tittle">
                    Evento:
                </label>
                <input type="text" class="form-control" id='tittle' name='tittle' placeholder='Nome do evento'>
            </div>
            <div class="form-group">
                <label for="date">
                    data do evento:
                </label>
                <input type="date" class="form-control" id='date' name='date' >
            </div>
            <div class="form-group">
                <label for="tittle">
                    Cidade:
                </label>
                <input type="text" class="form-control" id='city' name='city' placeholder='Local do evento'>
            </div>
            <div class="form-group">
                <label for="tittle">
                    Descrição:
                </label>
                <textarea class="form-control" id='description' name='description' placeholder='O que vai acontecer no evento'></textarea>
            </div>
            <div class="form-group">
                <label for="tittle">
                    O evento é privado?
                </label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="items[]">
                    Adicione items a infraestrutura:
                </label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value='Cadeiras'>Cadeiras
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value='Palco'>Palco
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value='Cerveja grátis'>Cerveja grátis
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value='Open food'>Open food
                </div>
            </div>
            <input type="submit" value="Criar evento" class="btn btn-primary botaoCreateEvent" >
        </form>
    </div>

@endsection