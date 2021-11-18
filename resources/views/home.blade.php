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
                <img src="/img/events/{{$event->image}}" alt="{{$event->tittle}}">
                <div class="card-body">
                    <p class="card-date">{{date('d/m/y'), strtotime($event->date)}}</p>
                    <h5 class='card-tittle'>{{$event->tittle}}</h5>
                    <p class="card-participants">X participantes</p>
                    <p>{{$event->description}}</p>
                    <p>{{$event->city}}</p>
                    <a href="/events/{{$event->id}}" class='btn btn-primary'>Saber mais</a>
                </div>
                
                
            </div>
        @endforeach
        @if(count($events)==0)
        <p>Não á eventos cadastrados até o momento!</p>
        @endif
    </div>
</div>


@endsection
