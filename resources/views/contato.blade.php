

@extends('layouts.main')
@section('tittle', 'Contato')
@section('content')
<h1>View Contato</h1>

<a href="/">Voltar para home</a>
<a href="/Produtos"> Voltar para Produtos</a>
<form action="/Produto" method="get">
    <input type="text" name='id'>
    <button type='submit' >Ir para produtos</a>
</form>

    
@endsection