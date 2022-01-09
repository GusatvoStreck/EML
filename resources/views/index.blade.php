@extends('layouts.main')
@section('title', 'EML')
@section('content')

<div class="col-md-8 offset-md-2">
    <h1 class="home-title">Easy Music Learning: <br>Uma plataforma para aprender música</h1>
    <p class="home-bigtext">
        Música pode parecer algo complicado, bem... ela é, mas isso não significa que seja impossível aprende-la.
        Principalmente no início tudo pode parecer meio confuso, porém estamos aqui para te ajudar principalmente com esse primeiro passo seu no mundo musical!!
        Tentamos ao máximo simplificar o conteúdo inicial para facilitar o seu entendimento da matéria, para que quando se deparar com os principais termos utilizados, você saiba o que cada um significa!
    </p>
</div>
<div class="col-md-6 offset-md-3">
    <div class="row"> 
        <div class="col-md-4 home-box1">
        <a href="/modulos" style="text-decoration: none;"><h3 class="home-mod-title">Módulos</h3></a>
            <p class="home-smalltext">
            Acesse a página dos módulos e tenha a sua disposição vários conteudos totalmente gratuitos para você começar ou continuar estudando música!
        </p>
        </div>
        <div class="col-md-4 home-box2">
            <a href="/busca" style="text-decoration: none;"><h3 class="home-mod-title">Professores</h3></a>
        <p class="home-smalltext">Encontre professores para aprofundar seus conhecimentos além de ter a oportunidade do acompanhamento profissional na sua jornada musical!</p>  
    </div>
</div>
</div>

    
@endsection