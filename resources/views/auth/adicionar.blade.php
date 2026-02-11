@extends('layouts.app')

@section('title', 'Adicionar Produto - Musclr')

@section('content')
    <div class="form-container">
        <h1>Novo Produto</h1>

        <form action="{{ route('produto/adicionar/submit') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name">Nome do Produto</label>
                <input type="text" id="name" name="name" placeholder="Ex: Whey Protein 1kg" value="{{ old('name') }}" required>
            </div>

            <div class="form-group">
                <label for="category">Categoria</label>
                <select id="category" name="category" required>
                    <option value="" disabled selected>Selecione uma categoria</option>
                    <option value="suplementos">Suplementos</option>
                    <option value="equipamentos">Equipamentos</option>
                </select>
            </div>

            <div class="form-group">
                <label for="price">Preço (R$)</label>
                <input type="number" id="price" name="price" placeholder="0.00" step="0.01" min="0" value="{{ old('price') }}" required>
            </div>

            <div class="form-group">
                <label for="image">Imagem do Produto</label>
                <input type="file" id="image" name="image" accept="image/*" required>
            </div>

            <div class="form-group">
                <label for="description">Descrição</label>
                <textarea id="description" name="description" placeholder="Descreva os detalhes do produto..." required>{{ old('description') }}</textarea>
            </div>

            <button type="submit" class="btn-submit">CADASTRAR PRODUTO</button>
        </form>
    </div>
@endsection