@extends('layouts.main')
@section('title', 'Modulos')
@section('content')
<div class="col-md-6 offset-md-3">
    <h1 class="modulo-title">Cifras</h1>
    <p class="modulo-text">
        &emsp;&emsp;Cifra é uma notação para representar o nome dos acordes. Quando pesquisamos uma música na internet aparece as letras C, D, etc, mas o que elas significam? As cifras tem a mesma maneira de se referir a uma nota,
        a letra C por exemplo pode tanto ser a nota Dó, quanto o acorde de Dó maior. Normalmente junto com a cifra temos outros simbulos como m, sus2, sus4, +, dim ... Vamos ver o que cada coisa significa.
    </p>
    <br>
    <h3 class="modulo-subtitle2">Letra sem nenhum acompanhamento</h3>
    <p class="modulo-text">
        &emsp;&emsp;Quando a cifra é apenas a letra sem algo a mais, ela se refere ao acorde maior da nota, exemplo: C -> Acorde de Dó maior.
    </p>
    <br>
    <h3 class="modulo-subtitle2">Letra acompanhada da letra m</h3>
    <p class="modulo-text">
        &emsp;&emsp;Quando a letra é acompanhada do m, ela se refere ao acorde menor da nota, exemplo: Cm -> Acorde de Dó menor.
    </p>
    <br>
    <h3 class="modulo-subtitle2">Letra acompanhada de sus2 ou sus4</h3>
    <p class="modulo-text">
        &emsp;&emsp;Quando a letra é acompanhada de sus2 ou sus4, ela se refere aos acordes suspensos da nota, exemplo: Csus2 -> Acorde de Dó segunda suspensa / Csus4 -> Acorde de Dó quarta suspensa. 
    </p>
    <br>
    <h3 class="modulo-subtitle2">Letra acompanhada de dim ou +</h3>
    <p class="modulo-text">
        &emsp;&emsp;Quando a letra é acompanhada de dim ou +, ela se refere aos acordes diminuto ou aumentado, exemplo: Cdim -> Acorde de Dó diminuto / Csus4 -> Acorde de Dó aumentado. 
    </p>
    <br>
    <h3 class="modulo-subtitle2">Letra acompanhada de 7 ou 9</h3>
    <p class="modulo-text">
        &emsp;&emsp;Quando a letra é acompanhada de numeros como 7 ou 9, ela se refere aos graus da nota, no caso adicionar o sétimo grau e/ ou o nono assim por diante, exemplo: C7 -> Acorde de Dó maior com sétima.
    </p>
    <br>
    <p class="modulo-end"><a href="/modulos/acordes/tetrade" class="important-word"><- Tétrade</a>&emsp;&emsp;<a href="/modulos/acordes/formacaoacordes" class="important-word">Formação de Acordes -></a></p>
</div>

@endsection