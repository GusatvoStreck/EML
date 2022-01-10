<!doctype html>
<html lang="pt-br">
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Overpass&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/styles.css">
        <script src="js/scripts.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">EML - Easy Music Learning</a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="/modulos" class="nav-link">Módulos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/busca" class="nav-link">Buscar professores</a>
                        </li>
                        @auth
                        @foreach(\App\Models\Teacher::all() as $teacher)
                            @if($teacher->user_id == Auth::user()->id)
                                <li class="nav-item">
                                    <a href="/teacher/{{ $teacher->id }}" class="nav-link">Perfil</a>
                                </li>
                            @endif
                        @endforeach
                        @php   
                            $x = 0;
                            foreach(\App\Models\Teacher::all() as $teacher){
                                if($teacher->user_id == Auth::user()->id){
                                    $x = 1;
                                }
                            }
                            if($x == 0){
                                echo '<li class="nav-item"><a href="/teacher/create" class="nav-link">Cadastrar como professor</a></li>';
                            }  
                        @endphp
                        <li class="nav-item">
                            <form action="/logout" method="POST">
                            @csrf
                            <a href="/logout" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
                        </form>
                        </li>
                        @endauth
                        @guest
                        <li class="nav-item">
                            <a href="/login" class="nav-link">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/register" class="nav-link">Cadastrar</a>
                        </li>
                        @endguest

                    </ul>
                </div>
            </nav>
        </header>
        @yield('content')
        <footer>
            <p>EML - Easy Music Learning  2021</p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>