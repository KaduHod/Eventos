@extends('layouts.main')
@section('tittle', 'Produto')
@section('content')
<h1>Produtos</h1>
<a href="/Contato">Voltar para contato</a>
<a href="/">voltar para home</a>

@if($id == null)
<p>Id não identificado!</p>
@else
<p>Exibindo produto id: {{ $id }}</p>
@endif
@endsection