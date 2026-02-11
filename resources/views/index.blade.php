@extends('layouts.app')

@section('title', 'Musclr - Notícias')

@section('css')
    <style>
        /* Estilos específicos da Home */
        body { background-color: #f4f4f4; }
        main { max-width: 800px; margin: 0 auto; padding: 20px; }
        article { background: white; padding: 20px; margin-bottom: 30px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        article img { max-width: 100%; height: auto; border-radius: 5px; margin-bottom: 15px; }
        h1 { color: #d32f2f; font-family: 'Lobster Two', cursive; }
        p { line-height: 1.6; color: #333; }
        .post-content { text-align: left; }
    </style>
@endsection

@section('content')
    <article class="post">
        <h1>Ramon Dino conquista o mundo: o novo rei do Mr. Olympia 2025!</h1>
        <div class="post-content">
            <img src="https://cdn-imgs.s3.sa-east-1.amazonaws.com/wp-content/uploads/2025/10/imagem_2025-10-12_100441781-860x570.png" alt="Ramon Dino">
            <p>Ramon Dino faz história no fisiculturismo mundial! O brasileiro conquistou o título de Mr. Olympia 2025...</p>
            <p>Sua vitória representa não apenas um marco pessoal, mas também o reconhecimento do potencial...</p>
        </div>
    </article>

    <article class="post">
        <h1>Ficar grande a qualquer custo?</h1>
        <div class="post-content">
            <img src="https://s2-ge.glbimg.com/ynLXTtTQ4BJjLOm4c4ojkUag-uA=/1280x0/filters:format(jpeg)/https://s02.video.glbimg.com/x720/12517761.jpg" alt="Treino">
            <p>Muita gente quer resultado rápido e acaba caindo no uso de anabolizantes...</p>
            <p>O pior é que, depois de começar, o espelho nunca satisfaz...</p>
        </div>
    </article>

    <article class="post">
        <h1>Rodrigo Pantera muda o jogo e mostra que o sonho é possível</h1>
        <div class="post-content">
            <img src="https://img.nsctotal.com.br/wp-content/uploads/2025/10/Rodrigo-Pantera-1.jpg" alt="Rodrigo Pantera">
            <p>O atleta baiano Rodrigo Pantera fez história no mundo do fisiculturismo...</p>
            <p>Com isso, ele garantiu o tão almejado Pro Card...</p>
        </div>
    </article>
@endsection