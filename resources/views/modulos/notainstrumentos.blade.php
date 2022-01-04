@extends('layouts.main')
@section('title', 'Notas dos Instrumentos')
@section('content')
<div class="col-md-6 offset-md-3">
    <h1 class="modulo-title">Notas nos Instrumentos</h1>
    <p class="modulo-text">
        &emsp;&emsp;Agora que você sabe as notas presentes na música ocidental, e como medir a distância de uma para a outra, é possivel saber aonde fica cada nota em cada instrumento.<br>
        &emsp;&emsp;Quase todos os instrumentos seguem o padrão de cada tecla ou casa é um semitom acima da anterior, Por exemplo um violão afinado com a afinação padrão:
    </p>

    <img src="/img/violao.jpg" alt="imagemnotasviolao" class="modulo-img">
    <br>
    <p class="modulo-text">
    &emsp;&emsp;Em instrumentos de corda é mais complicado saber qual nota fica em cada casa, porque depende da afinação do instrumento, portanto não possui uma casa definitiva para cada nota.<br>
    &emsp;&emsp;Diferentemente os instrumentos de tecla como o piano, nele identificar qual nota é em cada casa é muito fácil, porque ele tem um padrão que pode ser identificado pela quantidade de teclas pretas.
    O piano pode ser dividido em 2 sessões, separadas toda vez que temos 2 teclas brancas sem nenhuma preta no meio. Quando tem apenas 2 teclas pretas as notas vão de Dó( C ) até a nota Mi( E ), enquanto quando temos 3
    teclas pertas as notas vão de Fá( F ) até a nota Si( B ). E qual é a diferença das teclas pretas para as brancas? A resposta é muito simples, as teclas brancas são as notas naturais e as Pretas são os acidentes que a gente já viu antes quais são.
    As notas de um piano/teclado:
    </p>
    <br>
    <img src="/img/piano.jpg" alt="" class="modulo-img">
    <br>
    <br>
    <p class="modulo-end"><a href="/modulos/intervalos" class="important-word"><- Intervalos</a>&emsp;&emsp;<a href="/modulos/timbres" class="important-word">Timbres -></a></p>
</div>


@endsection