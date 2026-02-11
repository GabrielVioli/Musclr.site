@extends('layouts.app')

@section('title', $product->name . ' - Musclr')

@section('content')
    <div class="produto-detalhe-container" style="display: flex; gap: 40px; padding: 40px; max-width: 1000px; margin: 40px auto; background: white; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); flex-wrap: wrap;">
        
        <div class="imagem-grande" style="flex: 1; min-width: 300px; display: flex; align-items: center; justify-content: center;">
            <img src="{{ asset('storage/' . $product->urlImage) }}" alt="{{ $product->name }}" style="max-width: 100%; max-height: 500px; object-fit: contain;">
        </div>

        <div class="info-detalhe" style="flex: 1; min-width: 300px;">
            <h1 style="font-family: 'Lobster Two', cursive; font-size: 2.5rem; margin-bottom: 15px;">{{ $product->name }}</h1>
            
            <div class="estrelas" style="color: gold; font-size: 1.2rem; margin-bottom: 20px;">
                ★★★★★ <span style="color: #666; font-size: 0.9rem;">(4.8 de 5)</span>
            </div>

            <p class="preco-grande" style="font-size: 2rem; font-weight: bold; color: #111; margin-bottom: 20px;">
                R$ {{ number_format($product->price, 2, ',', '.') }}
            </p>

            <p class="descricao-completa" style="line-height: 1.6; color: #555; margin-bottom: 30px;">
                {{ $product->description }}
            </p>

            {{-- Formulário de Compra --}}
            <form action="{{ route('carrinho') }}" method="POST" style="display: flex; gap: 10px; flex-direction: column;">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                
                <button type="submit" class="btn-comprar" style="background-color: #02ff02; color: #000; border: none; padding: 15px 30px; border-radius: 8px; font-weight: bold; font-size: 1.1rem; cursor: pointer; text-transform: uppercase; transition: transform 0.2s;">
                    Adicionar ao Carrinho 🛒
                </button>
            </form>
            
            <a href="{{ url()->previous() }}" style="display: inline-block; margin-top: 20px; color: #666; text-decoration: none;">← Voltar para a loja</a>
        </div>
    </div>
@endsection