@extends('layouts.app')

@section('title', 'Musclr - Suplementos')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/suple.css') }}">
@endsection

@section('content')
    <h2 class="titulo-secao">Suplementos</h2>

    <section class="grid-produtos">
        <div class="card-produto">
            <div class="img-container">
                <img src="https://www.vihado.in/cdn/shop/files/VihadoWheyProtein-1.png?v=1722322592" alt="Whey Protein">
            </div>
            <div class="info">
                <h3>Whey Protein 1kg</h3>
                <div class="estrelas">★★★★☆</div>
                <span class="preco">R$ 109,90</span>
                <a href="{{ route('produto.whey') }}" class="btn-ver">Ver Produto</a>
            </div>
        </div>

        <div class="card-produto">
            <div class="img-container">
                <img src="https://midias.agazeta.com.br/2024/05/09/auto-upload-2099177.png" alt="Creatina">
            </div>
            <div class="info">
                <h3>Creatina Monohidratada</h3>
                <div class="estrelas">★★★★★</div>
                <span class="preco">R$ 89,90</span>
                <a href="#" class="btn-ver">Ver Produto</a>
            </div>
        </div>

        <div class="card-produto">
            <div class="img-container">
                <img src="https://images.tcdn.com.br/img/img_prod/677409/bcaa_2_1_1_200g_sabor_uva_ftw_643_1_0039e44f44f51e8c00196d4361c0ae6d.png" alt="BCAA">
            </div>
            <div class="info">
                <h3>BCAA 2:1:1</h3>
                <div class="estrelas">★★★★☆</div>
                <span class="preco">R$ 79,90</span>
                <a href="#" class="btn-ver">Ver Produto</a>
            </div>
        </div>
        
    </section>
@endsection