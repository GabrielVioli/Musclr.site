@extends('layouts.app')

@section('title', $product->name . ' - Musclr')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/whey.css') }}">
@endsection

@section('content')
    <div class="produto-container">
        <div class="imagem-produto">
            <img src="{{ $product->image }}" alt="{{ $product->name }}">
        </div>

        <div class="info-produto">
            <h1>{{ $product->name }}</h1>
            
            <div class="estrelas">
                <span class="cheia">★</span><span class="cheia">★</span><span class="cheia">★</span><span class="cheia">★</span><span class="vazia">★</span>
            </div>

            <p class="preco">R$ {{ number_format($product->price, 2, ',', '.') }}</p>

            <p class="descricao">
                {{ $product->description }}
            </p>

            <ul class="detalhes">
                @foreach($product->features as $feature)
                    <li>✔️ {{ $feature }}</li>
                @endforeach
            </ul>

            <button class="btn-carrinho">Adicionar ao carrinho 🛒</button>
            
            <a href="{{ route($product->category) }}" class="voltar">← Voltar aos {{ $product->category }}</a>
        </div>
    </div>
@endsection