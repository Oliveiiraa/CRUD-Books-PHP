@extends('templates.template')

@section('content')
    <h1 class="text-center">VISUALIZAR</h1>
    <hr>

    <div class="col-10 m-auto">
    @php
        $user= $book->find($book->id)->relUsers;
    @endphp
       Título: {{ $book->title }}<br>
       Páginas: {{ $book->pages }}<br>
       Valor: R$ {{ $book->price }}<br>
       Autor: {{ $user->name }}<br>
       Email do Autor: {{ $user->email }}<br>
    </div>
    <div class="text-center">
    <a href="/books">
        <button class="btn btn-primary">Voltar</button>
    </a>
    </div>
@endsection