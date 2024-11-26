@extends('layouts.base')

@section('content')
@foreach($produtos as $produto)
    <div>
        <h3>{{ $produto->descricao }}</h3>
        <p>{{ $produto->preco }}</p>
        <a href="{{ url('produtos/'.$produto->id.'/edit') }}">Edit</a>
        <form action="{{ url('produtos/'.$produto->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach
@endsection