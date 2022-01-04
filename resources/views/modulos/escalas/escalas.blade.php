@extends('layouts.main')
@section('title', 'Escalas Musicais')
@section('content')

<div class="col-md-6 offset-md-3">
    <h1 class="modulo-title">Escalas Musicais</h1>
    <h2 class="modulo-subtitle">Escalas Maiores</h2><br>
    <p class="modulo-text">
    &emsp;&emsp;Escalas musicais são sequências ordenadas de <a href="/modulos/notas" class="important-word">notas</a> seguindo uma sequencia de <a href="/modulos/intervalos" class="important-word">intervalos</a>.
    Por exemplo a sequência: Dó, Ré, Mi, Fá, Sol Lá, Si. A sequência de <a href="/modulos/intervalos" class="important-word">intervalos</a> dela
    é tom, tom, semitom, tom, tom, tom, semitom. Essa sequência é a escala maior, e como começa na nota Dó, chamamos ela de escala de Dó maior. Agora que sabemos como se encontra a escala maior de uma nota, abaixo 
    vai aparecer todas as 12 notas existentes e como um mini atividade quero que você encontre todas as notas da escala de Mi maior, lembrando da sequência de <a href="/modulos/intervalos" class="important-word">intervalos</a> e quando chegamos na nota Si, a próxima é a nota Dó novamente:
    <br>
    <br>
    C<br>C# / Db<br>D<br>D# / Eb<br>E<br>F<br>F# / Gb<br>G<br>G# / Ab<br>A<br>A# / Bb<br>B
    <br>
    <br>
    &emsp;&emsp;A resposta correta é Mi, Fá sustenido, Sol sustenido, Lá, Si,Dó sustenido e Ré sutenido( E, F#, G#, A, B, C#, D# ). Por que é Fá sustenido e não Sol bemol? Em uma escala as notas não se repetem,
    então nunca haverá em uma escala um Sol bemol e um Sol sustenido juntos. Sempre haverá as notas Dó, Ré, Mi, Fá, Sol, Lá, Si em escalas maiores, a diferença é se ela está na sua forma natural, sustenida ou bemol.
</p>
    <br>
    <h2 class="modulo-subtitle">Escalas Menores</h2><br>
    <p class="modulo-text">
    &emsp;&emsp;A escala menor tem uma sequência de intervalo diferente, no caso é: tom, semitom, tom, tom, tom, semitom, tom. Por exemplo a escala de Ré menor: Ré, Mi, Fá, Sol, Lá, Si bemol, Dó E volta para o Ré. 
    Vamos fazer a mesma coisa que antes, quero que você tente achar todas as notas da escala de Lá menor, pode usar as notas da lista anterior para ajudar caso precise, se não quiser tentar pode apenas ler o parágrafo a baixo que tem a resposta.
    <br>
    &emsp;&emsp;A resposta é Lá, Si, Dó, Ré, Mi, Fá, Sol e voltamos para o Lá. Um segundo, a escala de Lá menor é igual a de Dó maior? De uma maneira geral, sim, elas tem as mesmas notas, por mais que seja possivel diferenciar elas pela tônica
    que depois vamos ver os <a href="/modulos/escalas/grausmusicais" class="important-word">graus musicais</a>. Mas deixando isso de lado por um momento. Se pegar a escala menor da sexta nota de uma escala maior, ela vai ter as mesmas notas, e se pegar a terceira nota de uma escala menor e pegar a escala maior dessa nota elas também terão as mesmas notas.
    <br>
</p>
    <br>
    <h3 class="modulo-subtitle2">Todas as Escalas Maiores</h3>
 
    <br>
    <table class="modulo-table">
        <tr><th>Escala</th><th>Tônica</th><th>2°</th><th>3°</th><th>4°</th><th>5°</th><th>6°</th><th>7°</th></tr>
        <tr><th>C</th><td>C</td><td>D</td><td>E</td><td>F</td><td>G</td><td>A</td><td>B</td></tr>
        <tr><th>C#</th><td>Db</td><td>Eb</td><td>F</td><td>Gb</td><td>Ab</td><td>Bb</td><td>C</td></tr>
        <tr><th>D</th><td>D</td><td>E</td><td>F#</td><td>G</td><td>A</td><td>B</td><td>C#</td></tr>
        <tr><th>D#</th><td>Eb</td><td>F</td><td>G</td><td>Ab</td><td>Bb</td><td>C</td><td>D</td></tr>
        <tr><th>E</th><td>E</td><td>F#</td><td>G#</td><td>A</td><td>B</td><td>C#</td><td>D#</td></tr>
        <tr><th>F</th><td>F</td><td>G</td><td>A</td><td>Bb</td><td>C</td><td>D</td><td>E</td></tr>
        <tr><th>F#</th><td>F#</td><td>G#</td><td>A#</td><td>B</td><td>C</td><td>D#</td><td>E#</td></tr>
        <tr><th>G</th><td>G</td><td>A</td><td>B</td><td>C</td><td>D</td><td>E</td><td>F#</td></tr>
        <tr><th>G#</th><td>Ab</td><td>Bb</td><td>C</td><td>Db</td><td>Eb</td><td>F</td><td>G</td></tr>
        <tr><th>A</th><td>A</td><td>B</td><td>C#</td><td>D</td><td>E</td><td>F#</td><td>G#</td></tr>
        <tr><th>A#</th><td>Bb</td><td>C</td><td>D</td><td>Eb</td><td>F</td><td>G</td><td>A</td></tr>
        <tr><th>B</th><td>B</td><td>C#</td><td>D#</td><td>E</td><td>F#</td><td>G#</td><td>A#</td></tr>
    </table>
    <br>   
    <p class="modulo-text">
    &emsp;&emsp;Na escala de F# maior, é utilizado a nota Mi sustenido, que é igual a nota Fá, mas por não poder repetir notas dentro de uma escala, e já estava sendo utilizado o Fá sustenido na tônica, é utilzado Mi sustenido para se referir aquela nota.
    <br>
    <br>
</p>
    <h3 class="modulo-subtitle2">Todas as Escalas Menores</h3>
    <br>
    <table class="modulo-table">
        <tr><th>Escala</th><th>Tônica</th><th>2°</th><th>3°</th><th>4°</th><th>5°</th><th>6°</th><th>7°</th></tr>
        <tr><th>C</th><td>C</td><td>D</td><td>Eb</td><td>F</td><td>G</td><td>Ab</td><td>Bb</td></tr>
        <tr><th>C#</th><td>C#</td><td>D#</td><td>E</td><td>F#</td><td>G#</td><td>A</td><td>B</td></tr>
        <tr><th>D</th><td>D</td><td>E</td><td>F</td><td>G</td><td>A</td><td>Bb</td><td>C</td></tr>
        <tr><th>D#</th><td>D#</td><td>E#</td><td>F#</td><td>G#</td><td>A#</td><td>B</td><td>C#</td></tr>
        <tr><th>E</th><td>E</td><td>F#</td><td>G</td><td>A</td><td>B</td><td>C#</td><td>D</td></tr>
        <tr><th>F</th><td>F</td><td>G</td><td>Ab</td><td>Bb</td><td>C</td><td>D</td><td>Eb</td></tr>
        <tr><th>F#</th><td>F#</td><td>G#</td><td>A</td><td>B</td><td>C#</td><td>D#</td><td>E</td></tr>
        <tr><th>G</th><td>G</td><td>A</td><td>Bb</td><td>C</td><td>D</td><td>E</td><td>F</td></tr>
        <tr><th>G#</th><td>Ab</td><td>Bb</td><td>Cb</td><td>Db</td><td>Eb</td><td>Fb</td><td>Gb</td></tr>
        <tr><th>A</th><td>A</td><td>B</td><td>C</td><td>D</td><td>E</td><td>F</td><td>G</td></tr>
        <tr><th>A#</th><td>Bb</td><td>C</td><td>Db</td><td>Eb</td><td>F</td><td>Gb</td><td>Ab</td></tr>
        <tr><th>B</th><td>B</td><td>C#</td><td>D</td><td>E</td><td>F#</td><td>G</td><td>A</td></tr>
    </table>
    <br>
    <p class="modulo-end"><a href="/modulos/timbres" class="important-word"><- Timbres</a>&emsp;&emsp;<a href="/modulos/escalas/grausmusicais" class="important-word">Graus Musicais -></a></p>
</div>
@endsection