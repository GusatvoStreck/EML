@extends('layouts.main')
@section('title', 'Busca')
@section('content')

<div id="search-container" class="col-md-12">
    <h1 style="color: #c28008">Busque por cidades ou instrumentos</h1>
    <form action="/busca" method="GET">
        <input type="text" id="search" name="search" class="form-control" placheholder="Procurar...">
    </form>
</div>
<div id="teachers-container" class="col-md-12">
    <h2 style="color: #f2a340">Veja os professores disponiveis</h2>
    <div id="cards-container" class="row">
        @foreach($teachers as $t)
            <div class="card col-md-3">
                <img src="/img/teachers/{{ $t->image }}" alt="">
                <div class="cad-body">
                    <p class="card-name">{{ $t->name }}</p>
                    <p class="card-price" >R${{ $t->prices }} por aula</p>
                    <h4 class="card-city">{{$t -> city}}</h4>
                </div>
            <a href="/teacher/{{ $t->id }}" class="btn btn-primary">Ir para o perfil</a>
        </div>
         @endforeach
         @if(count($teachers) == 0 && $search)
            <p>Não foi possível encontrar nenhum professor. <a href="/busca">Ver todos</a></p>
         @elseif(count($teachers) == 0)
            <p>Não há professores disponiveis</p>
         @endif
    </div>
</div>
@endsection