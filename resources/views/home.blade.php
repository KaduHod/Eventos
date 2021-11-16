@extends('layouts.main')
@section('tittle', 'Projeto')
@section('content')

<div id='search-container' class='col-md-12'>
<h1>Busque por um evento</h1>
    <form action="" method="get">
        <input type="text" name="search" id="search" class='form-control' placeholder='Procurar...'>
    </form>
</div>
<div id='events-container' class='col-md-12'>
    <h2>Próximos Eventos</h2>
    <p class='subtittle'>Veja os eventos dos próximos dias</p>
    <div id='cards-container' class='row'>
        @foreach($events as $event)
            <div class='card col-md-3'>
                <img src="/img/GymPequeno.jpg" alt="{{$event->tittle}}">
                <div class="card-body">
                    <p class="card-date">10/09/2021</p>
                    <h5 class='card-tittle'>{{$event->tittle}}</h5>
                    <p class="card-participants">X participantes</p>
                    <p>{{$event->description}}</p>
                    <p>{{$event->create_at}}</p>
                    <p>{{$event->date_create}}</p>
                    <p>{{$event->city}}</p>
                    @if($event->private)
                        <strong> Evento privado</strong>
                    @else
                        <strong> Evento público</strong>
                    @endif
                    <a href="" class='btn btn-primary'>Saber mais</a>
                </div>
                
            </div>
        @endforeach
    </div>
</div>


@endsection
