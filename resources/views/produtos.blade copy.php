@extends('layouts.main')
@section('tittle', 'Produtos')
@section('content')
<h1>Produtos</h1>

<a href="/">voltar para home</a>
@if($busca !== '')
    <p>O usuario está procurando por {{$busca}}</p>
@endif
@endsection