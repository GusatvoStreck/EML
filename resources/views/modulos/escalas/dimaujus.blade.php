@extends('layouts.main')
@section('title', 'Diminuta, Aumentada e Justa')
@section('content')
<div class="col-md-6 offset-md-3">
    <h1 class="modulo-title">Diminuta, Aumentada e Justa</h1>
    <p class="modulo-text">
        &emsp;&emsp;Na útilma parte, nós utilizamos apenas as 7 notas naturais (C, D, E, F, G, A, B). E agora vamos ver como se referir às outras 
        5 notas existentes na música ocidental (C#, D#, F#, G#, A#). Para isso existe uma definição mais completa.<br>
        &emsp;&emsp;A primeira nota é o primeiro grau. Vamos dar de exemplo a nota Dó, nesse caso a nora Ré seria o segundo grau ou segundo grau maior, mas
        como nos referimos à nota Dó sustenido/Ré bemol? Ela seria o segundo grau menor. Normalmente pode ser abreviado apenas para "segundo maior" ou "segundo menor".
        <br>
        &emsp;&emsp;Repare que, o segundo grau maior representou 1 tom de diferença e o segundo menor 1 semitom. Esses nomes foram dados apenas 
        para termos uma indicação de distância entre notas. Usando esse conceito para as notas, usando Dó como a primeira nota:
        <br><br>
        C -> Primeiro grau maior<br>Db -> Segundo grau menor<br>D -> Segundo grau maior<br>Eb -> Terceiro grau menor<br>E -> Terceiro grau maior<br>
        F -> Quarta justa<br>F# -> Quarta aumentada (Gb -> Quinta diminuta)<br>G -> Quinta justa<br>G# -> Quinta aumentada (Ab -> Sexta menor)<br>A -> Sexta maior<br>Bb -> Sétima menor<br>B -> Sétima maior
    	<br>
        <br>
        &emsp;&emsp;O que seria aumentada, diminuta e justa?. É apenas uma definição, porque a lógia é a mesma para os nomes "maior" e "menor". "Aumentada" indica um intervalo mais longo,
        "diminuta" indica um intervalo mais curto e "justa" fica no meio das duas.<br>
        &emsp;&emsp;O motivo para existir o "justo" tem haver com a inversão do acorde, no caso se tocar-mos a nota Dó junto com a nota Fá, temos um intervalo justo
        e se pegarmos a próxima nota Dó e tocar com o mesma nota Fá de antes. O que seria a quinta da escala de Fá, ela seria uma quinta justa. Diferentemente dos maiores e menores
        que sempre quando acontece essa inversão, eles ivertem também, os graus que são maiores ao invertermos eles se transformam em menores e vice-versa. 
    </p>
    <p class="modulo-end"><a href="/modulos/escalas/grausmusicais" class="important-word"><- Graus Musicais</a>&emsp;&emsp;<a href="/modulos/escalas/oitavas" class="important-word">Oitavas -></a></p>
</div>

@endsection