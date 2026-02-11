<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Musclr')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:wght@400;600&family=Permanent+Marker&family=Lora:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=person" />

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @yield('css')
</head>

<body>
    <header>
        <div class="logo">
            <a href="{{ route('home') }}" style="font-family: 'Permanent Marker', cursive; font-size: 2rem; color: #fff; text-decoration: none;">Musclr</a>
        </div>
        
        <div class="search-bar">
            <img src="{{ asset('icons/serach.png') }}" alt="search" class="search" style="width: 24px; cursor: pointer;">
            
            <input type="text" placeholder="Pesquisar produtos...">
            
            <div class="actions">
                @guest
                    <a href="{{ route('login.form') }}"><img src="{{ asset('icons/perfil.png') }}" alt="perfil" class="per" style="width: 24px;"></a>
                @endguest

                @auth
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn-logout">SAIR</button>
                    </form>

                    <p><a href="/produto/adicionar" class="btn-logout">Adicionar produto</a></p>
                @endauth

                <a href="{{ route('carrinho') }}" class="car"><img src="{{ asset('icons/shop.png') }}" alt="shop" class="shop" style="width: 24px; color='white'"></a>
            </div>
        </div>
    </header>

    @if(session('success'))
        <div class="alert-success" style="background-color: #02ff02; color: #000; padding: 15px; text-align: center; font-weight: bold; margin-bottom: 20px; border-radius: 8px;">
            {{ session('success') }}
        </div>
    @endif

    <nav>
        <a href="{{ route('suplementos') }}">Suplementos</a>
        <a href="#">Parcerias</a>
        <a href="#">Categorias</a>
        <a href="{{ route('equipamentos') }}">Equipamentos</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer style="background: #111; color: #fff; text-align: center; padding: 20px; margin-top: 20px;">
        <p>&copy; {{ date('Y') }} Musclr - Todos os direitos reservados.</p>
    </footer>
</body>
</html>