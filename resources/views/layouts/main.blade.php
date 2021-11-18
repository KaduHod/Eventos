<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('tittle')</title>
    

    <!-- Font google Roboto e Yuji Mai-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Yuji+Mai&display=swap" rel="stylesheet">
    <!-- css bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- css da aplicação -->
        <link rel="stylesheet" href="/css/geral.css">
        <link rel="stylesheet" href="/css/footer.css">
        <link rel="stylesheet" href="/css/header.css">
        <link rel="stylesheet" href="/css/botoes.css">
        <link rel="stylesheet" href="/css/links.css">
        <link rel="stylesheet" href="/css/card.css">
    <style>
        
        
    </style>
</head>
<body>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <header>
        <nav class="navbar navbar-expand-lg navbar-ligth">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="" class="navbar-brand">
                    <img style='width:50px' src="/img/logo.png" alt="Personal Trainer" >
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/events/create" class="nav-link">Criar Evento</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Musculação</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Cross</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Pilates</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Cadastrar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                    <p class="msg">{{session('msg')}}</p>
                @endif
                @yield('content') <!-- conteudo renderizado da view -->
            </div>
        </div>
    </main>    
    <footer>
        <p>Meu Footer</p>
    </footer>
    
</body>
</html>