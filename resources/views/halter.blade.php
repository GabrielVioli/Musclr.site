@extends('layouts.app')

@section('title', 'Halteres 10kg - Musclr')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/halter.css') }}">
@endsection

@section('content')
    <div class="produto-container">
        <div class="imagem-produto">
            <img src="https://maniakfitness.com/media/catalog/articles/64_carousel_1.webp" alt="Halteres 10kg">
        </div>

        <div class="info-produto">
            <h1>Halteres 10kg</h1>

            <div class="estrelas">
                <span class="cheia">★</span><span class="cheia">★</span><span class="cheia">★</span><span class="cheia">★</span><span class="vazia">★</span>
            </div>

            <p class="preco">R$ 199,90</p>

            <p class="descricao">
                Os <strong>Halteres de 10kg</strong> são ideais para quem quer fortalecer os músculos de forma prática e
                eficiente, tanto em casa quanto na academia. Fabricados com material de alta durabilidade, garantem
                segurança e conforto durante os treinos.
            </p>

            <ul class="detalhes">
                <li>✔️ Par de halteres com 10kg cada</li>
                <li>✔️ Pegada anatômica e antiderrapante</li>
                <li>✔️ Revestimento resistente e fácil de limpar</li>
                <li>✔️ Ideal para treinos de força e resistência</li>
            </ul>

            <button class="btn-carrinho">Adicionar ao carrinho 🛒</button>
            <a href="{{ route('equipamentos') }}" class="voltar">← Voltar aos equipamentos</a>
        </div>
    </div>
@endsection