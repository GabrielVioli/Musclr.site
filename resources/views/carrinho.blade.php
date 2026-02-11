@extends('layouts.app')

@section('title', 'Musclr - Carrinho')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/carrinho.css') }}">
@endsection

@section('content')
    <section class="carrinho-produtos">
        <div class="produto-carrinho">
            <img src="https://www.vihado.in/cdn/shop/files/VihadoWheyProtein-1.png?v=1722322592" alt="Whey Protein">
            <div class="info">
                <h3>Whey Protein 1kg</h3>
                <span class="preco">R$ 109,90</span>
                <div class="quantidade">
                    <label for="qtd1">Qtd:</label>
                    <input type="number" id="qtd1" value="1" min="1">
                </div>
            </div>
            <button class="remover">Remover</button>
        </div>

        <div class="produto-carrinho">
            <img src="https://midias.agazeta.com.br/2024/05/09/auto-upload-2099177.png" alt="Creatina">
            <div class="info">
                <h3>Creatina Monohidratada</h3>
                <span class="preco">R$ 89,90</span>
                <div class="quantidade">
                    <label for="qtd2">Qtd:</label>
                    <input type="number" id="qtd2" value="2" min="1">
                </div>
            </div>
            <button class="remover">Remover</button>
        </div>
    </section>

    <div class="total">
        <h3>Total: <span>R$ 289,70</span></h3>
        <button class="finalizar">Finalizar Compra</button>
    </div>
@endsection