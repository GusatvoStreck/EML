@extends('layouts.main')
@section('title', 'Modulos')
@section('content')

<div id="modules-container">
    <div class="card col-md-12">
        <div class="module-name">Básico</div>
        <a href="/modulos/musica" class="modules-link"><div class="modules-content">O que é música?</div></a>
        <a href="/modulos/notas" class="modules-link"><div class="modules-content">Notas</div></a>
        <a href="/modulos/acidentes" class="modules-link"><div class="modules-content">Sustenido e Bemol</div></a>
        <a href="/modulos/intervalos" class="modules-link"><div class="modules-content">Intervalos</div></a>
        <a href="/modulos/notainstrumentos" class="modules-link"><div class="modules-content">Notas no instrumento</div></a>
        <a href="/modulos/timbres" class="modules-link"><div class="modules-content">Timbre</div></a>
    </div>
    <div class="card col-md-12">
    <div class="module-name">Escalas</div>
    <a href="/modulos/escalas/escalas" class="modules-link"><div class="modules-content">Escalas Musicais</div></a>
    <a href="/modulos/escalas/grausmusicais" class="modules-link"><div class="modules-content">Graus musicais</div></a>
    <a href="/modulos/escalas/dimaujus" class="modules-link"><div class="modules-content">Diminuta, aumentada e justa</div></a>
    <a href="/modulos/escalas/oitavas" class="modules-link"><div class="modules-content">Oitavas</div></a>
    <a href="/modulos/musica" class="modules-link"> <div class="modules-content"></div></a>
    <a href="/modulos/musica" class="modules-link"><div class="modules-content"></div></a>
    </div>
    <div class="card col-md-12">
    <div class="module-name">Acordes</div>
    <a href="/modulos/acordes/acordes" class="modules-link"><div class="modules-content">Definição de acorde</div></a>
    <a href="/modulos/acordes/triade" class="modules-link"><div class="modules-content">Tríade</div></a>
    <a href="/modulos/acordes/tetrade" class="modules-link"> <div class="modules-content">Tétrade</div></a>    
    <a href="/modulos/acordes/cifras" class="modules-link"> <div class="modules-content">Cifras</div></a>
    <a href="/modulos/acordes/formacaoacordes" class="modules-link"> <div class="modules-content">Formação de acordes</div></a>

    </div>
</div>



@endsection