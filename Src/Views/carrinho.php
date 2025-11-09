<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musclr - Carrinho</title>
    <link rel="stylesheet" href="carrinho.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=person" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <a href="index.html"><p>Musclr</p></a>
        <a href="login.html"><span class="material-symbols-outlined">
                person
            </span></a>
    </header>

    <nav>
        <a href="suple.html">Suplementos</a>
        <a href="#">Parcerias</a>
        <a href="#">Categorias</a>
        <a href="equipamentos.html">Equipamentos</a>
    </nav>

    <main>
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
    </main>
</body>

</html>