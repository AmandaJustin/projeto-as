@extends('layouts.base')

@section('content')
    <form class="max-w-sm mx-auto" action="{{ url('produtos/'.$produto->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="mb-5">
                <label for="descricao" class="block mb-2 text-sm font-medium text-gray-900">Descrição</label>
                <input type="text" name="descricao" id="descricao" value="{{ $produto->descricao }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>
            <div class="mb-5">
                <label for="preco" class="block mb-2 text-sm font-medium text-gray-900">Preço</label>
                <input type="number" name="preco" id="preco" value="{{ $produto->preco }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div> 
            <div class="mb-5">
        <label for="categoria_id" class="block mb-2 text-sm font-medium text-gray-900">Categoria</label>
        <select name="categoria_id" id="categoria_id">
            <option value="">Selecionar Categoria</option>
            @foreach ($categorias as $categoria)
                @if($categorias->id === $produto->categoria->id)
                    <option value="{{ $categorias_id }}">{{ $categorias->name }}</option>
                @else
                    <option value="{{ $categoria->id }}">{{ $categoria->descricao }}</option> 
                @endif       
            @endforeach
        </select>
        </div>
            <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="submite">Editar Produto</button>
        </form>
@endsection
