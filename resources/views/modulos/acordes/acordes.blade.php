@extends('layouts.main')
@section('title', 'Definição de Acordes')
@section('content')
<div class="col-md-6 offset-md-3">
    <h1 class="modulo-title">Definição de Acorde</h1>
    <p class="modulo-text">
        &emsp;&emsp;Um acorde é a união duas ou mais notas tocadas ao mesmo tempo. Habilitando inúmeras combinações possiveis, para deixar
        a vida dos musicos mais fácil, cada acorde recebe um nome. Esse nome é baseado nas nota tônica do acorde, que seria a nota em qual o acorde é baseado.
    </p>
    <br>
    <h3 class="modulo-subtitle2">Acordes maiores</h3>
    <br>
    <p class="modulo-text">
        &emsp;&emsp;Acordes maiores são formados usando o 3° grau maior, esses acordes normalmente soam felizes e alegres.
    </p>
    <br>
    <h3 class="modulo-subtitle2">Acordes menores</h3>
    <br>
    <p class="modulo-text">
        &emsp;&emsp;Acordes menores diferentemente dos acordes maiores utilizam o 3° grau menor, esses acordes soam mais tristes.
    </p>
    <br>
    <p class="modulo-text">
        &emsp;&emsp;Os acordes maiores e menores, são os mais utilizados normalmente, mas existem uma infinidade de acordes mais complexos que podem ser tocados.
        E como pode ser percebido, não é as notas que dão a sensação do acorde mas os intervalos entre eles, um semitom de diferença consegue mudar o sentimento passado pelo acorde de feliz para triste, então saber utiliza-los é extremamente importante na música.
    </p>
<p class="modulo-end"><a href="/modulos/escalas/oitavas" class="important-word"><- Oitavas</a>&emsp;&emsp;<a href="/modulos/acordes/triade" class="important-word">Tríades -></a></p>
</div>

@endsection