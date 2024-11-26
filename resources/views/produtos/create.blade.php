@extends('layouts.base')

@section('content')
    <form class="max-w-sm mx-auto" action="{{ url('produtos') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-5">
        <label for="descricao" class="block mb-2 text-sm font-medium text-gray-900">Descrição</label>
        <input type="text" name="descricao" id="descricao" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        </div>
        <div class="mb-5">
            <label for="preco" class="block mb-2 text-sm font-medium text-gray-900">Preço</label>
            <input type="text" name="preco" id="preco" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        </div> 
        <div class="mb-5">
        <label for="categoria_id" class="block mb-2 text-sm font-medium text-gray-900">Categoria</label>
        <select name="categoria_id" id="categoria_id">
            <option value="">Selecionar Categoria</option>
        </select>
        </div>

        <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="submit" >Criar Produto</button>
    </form>
@endsection
