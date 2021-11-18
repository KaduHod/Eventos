@extends('layouts.main')


@section('tittle', '$event->tittle')


@section('content')
    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/events/{{$event->image}}" class='image-fluid ' style='max-width:500px' alt="{{$event->tittle}}">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{$event->tittle}}</h1>
                <p class="event-city"> <ion-icon name="pin"></ion-icon>{{$event->city}}</p>
                <p class="events-participants"> <ion-icon name="contacts"></ion-icon> X participantes </p>
                <p class="event-owner"><ion-icon name="star"></ion-icon> Fulano de tal</p>
                <a href="#" class='btn btn-primary' id='event-submit'> Confirmar presença</a>
                <h3>O evento conta com:</h3>
                <ul id="items-list">
                    @foreach($event->items as $item)
                    <li><ion-icon name='pricetag'> </ion-icon>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-12" id='description-container'>
                <h3>Sobre o evento:</h3>
                <p class="event-description">{{$event->description}}</p>

            </div>
        </div>
    </div>

@endsection