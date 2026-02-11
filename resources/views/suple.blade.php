@extends('layouts.app')

@section('title', 'Musclr - Suplementos')

@section('content')
    <h2 class="titulo">Suplementos</h2>

    <section class="produtos">
        @forelse($products as $product)
            <div class="produto">
                <img src="{{ asset('storage/' . $product->urlImage) }}" alt="{{ $product->name }}">
                
                <div class="description">
                    <h3>{{ $product->name }}</h3>
                    
                    <div class="estrelas">
                        <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                    </div>
                    
                    <span class="preco">R$ {{ number_format($product->price, 2, ',', '.') }}</span>
                    
                    <form action="{{ route('carrinho') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn-card">ADICIONAR AO CARRINHO</button>
                    </form>
                </div>
            </div>
        @empty
            <p style="text-align: center; width: 100%;">Nenhum suplemento cadastrado ainda.</p>
        @endforelse
    </section>
@endsection