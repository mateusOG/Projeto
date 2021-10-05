<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

     
        <link href="/css/styles.css" rel="stylesheet" >
        <link href="/js/app.js" rel="stylesheet" >
        <link href="/js/bootstrap.js" rel="stylesheet" >

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav">
                        <li classs="nav-item">
                            <a href="/" class="nav-link">Evento</a>
                        </li>
                        <li classs="nav-item">
                            <a href="/events/create" class="nav-link">Criar Evento</a>
                        </li>
                        <li classs="nav-item">
                            <a href="/" class="nav-link">Entrar</a>
                        </li>
                        <li classs="nav-item">
                            <a href="/" class="nav-link">Cadastrar</a>
                        </li>
                    </ul>
                </div>
            </nav> 
        </header>    
        @yield('content')
        <footer>
            <p id=a>Projeto Laravel &copy; 2021 </p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
