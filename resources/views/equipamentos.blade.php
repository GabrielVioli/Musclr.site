@extends('layouts.app')

@section('title', 'Musclr - Equipamentos')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/equipamentos.css') }}">
@endsection

@section('content')
    <h2 class="titulo">Equipamentos em Destaque</h2>

    <section class="produtos">
        <div class="produto">
            <img src="https://maniakfitness.com/media/catalog/articles/64_carousel_1.webp" alt="Halteres">
            <div class="description">
                <h3>Halteres 10kg</h3>
                <div class="estrelas">
                    <span class="cheia">★</span><span class="cheia">★</span><span class="cheia">★</span><span class="cheia">★</span><span class="vazia">★</span>
                </div>
                <span class="preco">R$ 199,90</span>
                <a href="{{ route('produto.halter') }}"><button>Adicionar ao carrinho</button></a>
            </div>
        </div>

        <div class="produto">
            <img src="https://images.tcdn.com.br/img/img_prod/999784/barra_w_cromada_com_rosca_big_import_2701_1_0bbc3a7c3cac8cd9545553263f7618ad.jpg" alt="Barra">
            <div class="description">
                <h3>Barra Cromada W</h3>
                <div class="estrelas">
                    <span class="cheia">★</span><span class="cheia">★</span><span class="cheia">★</span><span class="cheia">★</span><span class="vazia">★</span>
                </div>
                <span class="preco">R$ 299,90</span>
                <button>Adicionar ao carrinho</button>
            </div>
        </div>

        {{-- Outros equipamentos... --}}
    </section>
@endsection