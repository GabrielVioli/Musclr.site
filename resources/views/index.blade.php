<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musclr - Notícias e Suplementos</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Permanent+Marker&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <style>
        body { font-family: sans-serif; background-color: #f4f4f4; margin: 0; }
        main { max-width: 800px; margin: 0 auto; padding: 20px; }
        header, nav { text-align: center; background: #111; padding: 15px; color: white; }
        nav a { color: #fff; margin: 0 10px; text-decoration: none; font-weight: bold; }
        article { background: white; padding: 20px; margin-bottom: 30px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        article img { max-width: 100%; height: auto; border-radius: 5px; margin-bottom: 15px; }
        h1 { color: #d32f2f; font-family: 'Lobster Two', cursive; }
        p { line-height: 1.6; color: #333; }
        .search-bar { display: flex; justify-content: center; align-items: center; gap: 10px; margin-top: 10px; }
    </style>
</head>

<body>
    <header>
        <div class="logo">
            <a href="#" style="font-family: 'Permanent Marker', cursive; font-size: 2rem; color: #fff; text-decoration: none;">Musclr</a>
        </div>
        
        <div class="search-bar">
            <input type="text" placeholder="Pesquisar produtos..." style="padding: 8px; border-radius: 4px; border: none;">
            
            <div class="actions">
                <a href="#"><img src="icons/serach.png" alt="Buscar" width="24"></a>
                <a href="login.html"><img src="icons/perfil.png" alt="Perfil" width="24"></a>
                <a href="carrinho.html"><img src="icons/shop.png" alt="Carrinho" width="24"></a>
            </div>
        </div>
    </header>

    <nav>
        <a href="suple.html">Suplementos</a>
        <a href="#">Parcerias</a>
        <a href="#">Categorias</a>
        <a href="equipamentos.html">Equipamentos</a>
    </nav>

    <main>
        <article class="post">
            <h1>Ramon Dino conquista o mundo: o novo rei do Mr. Olympia 2025!</h1>
            <div class="post-content">
                <img src="https://cdn-imgs.s3.sa-east-1.amazonaws.com/wp-content/uploads/2025/10/imagem_2025-10-12_100441781-860x570.png" alt="Ramon Dino posando no palco">
                
                <p>
                    Ramon Dino faz história no fisiculturismo mundial! O brasileiro conquistou o título de Mr. Olympia 2025, consagrando-se como o primeiro atleta do Brasil a vencer na categoria Classic Physique. Com uma apresentação impecável, carisma e uma evolução física impressionante, Ramon superou os maiores nomes do esporte e levou o público à loucura.
                </p>
                <p>
                    Sua vitória representa não apenas um marco pessoal, mas também o reconhecimento do potencial e da força do fisiculturismo brasileiro no cenário internacional.
                </p>
            </div>
        </article>

        <article class="post">
            <h1>Ficar grande a qualquer custo?</h1>
            <div class="post-content">
                <img src="https://s2-ge.glbimg.com/ynLXTtTQ4BJjLOm4c4ojkUag-uA=/1280x0/filters:format(jpeg)/https://s02.video.glbimg.com/x720/12517761.jpg" alt="Pessoa treinando musculação">

                <p>
                    Muita gente quer resultado rápido e acaba caindo no uso de anabolizantes. Eles aumentam massa e força, mas o preço pode ser alto: desequilíbrio hormonal, problemas no coração, infertilidade e até dependência psicológica.
                </p>
                <p>
                    O pior é que, depois de começar, o espelho nunca satisfaz — sempre parece que dá pra “melhorar mais um pouco”. Ficar grande é bom, mas ficar saudável é melhor. O shape natural pode demorar, mas é o único que realmente é seu.
                </p>
            </div>
        </article>

        <article class="post">
            <h1>Rodrigo Pantera muda o jogo e mostra que o sonho é possível</h1>
            <div class="post-content">
                <img src="https://img.nsctotal.com.br/wp-content/uploads/2025/10/Rodrigo-Pantera-1.jpg" alt="Rodrigo Pantera exibindo troféu">

                <p>
                    O atleta baiano Rodrigo Pantera fez história no mundo do fisiculturismo ao conquistar, na edição de 2025 do Mr. Olympia Brasil, a categoria amadora de Classic Physique (Open C) e também o título geral (Overall).
                </p>
                <p>
                    Com isso, ele garantiu o tão almejado Pro Card da Federação Internacional de Fisiculturismo & Fitness (IFBB), que o torna atleta profissional.
                </p>
            </div>
        </article>
    </main>

    <footer style="background: #111; color: #fff; text-align: center; padding: 20px; margin-top: 20px;">
        <p>&copy; 2026 Musclr - Todos os direitos reservados.</p>
    </footer>

</body>
</html>