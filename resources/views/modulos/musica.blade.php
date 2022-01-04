@extends('layouts.main')
@section('title', 'O que é música')
@section('content')

<div class="col-md-6 offset-md-3">
    <h1 class="modulo-title">O que é musica?</h1>
    <p class="modulo-text">&emsp;&emsp;Não existe uma definição 100% correta que define o que é musica. 
        Mas uma maneira que se pode definir música é a combinação de sons e silencios de forma organizada.
        Vamos explicar com um exemplo básico: Um rangido de uma porta emite um som, mas não de forma organizada,
        logo não é classificado como música.<br>
        &emsp;&emsp;Outra Maneira de classificar música é a combinação de ritmo, harmonia e melodia
        de maneira agradável ao ouvido. No sentido restrito, é a arte de coordenar e transmitir efeitos sonoros harmoniosos e estéticamente válidos.
    </p>
    <br>
   <h2 class="modulo-subtitle">Melodia</h2>
    <p id="melodia" class="modulo-text">     
        &emsp;&emsp;Melodia é a voz principal da música, que se desenvolve em uma sequência linear, ele normalmente dá sentido para a música. Entretanto é dependente do ritmo
        para que faça sentido, e sem uma harmonia por trás, normalmente deixa a música soando incompleta e vazia.
    </p>
    <br>
    <h2 class="modulo-subtitle">Harmonia</h2>
    <p id="harmonia" class="modulo-text">
    &emsp;&emsp;Harmonia é uma sobreposição de <a href="/modulos/notas" class="important-word">notas</a> que servem de base para a melodia.
    Normalmente é formada por <a href="/modulos/acordes" class="important-word">acordes</a> que suportam a música, deixando ela soando mais completa e cheia. Outra função da harmonia é passar 
    a sensação da música desde algo mais melancólico até algo mais alegre.
    </p>
    <br>
    <h2 class="modulo-subtitle">Ritmo</h2>
    <p id="ritmo" class="modulo-text">
    &emsp;&emsp;Ritmo é a marcação do tempo de uma música, ele nos fala como acompanhar a música. O ritmo normalmente nos mostra o gênero da música, desde a batida do funk até o pandeiro do samba e a bateria do rock, 
    todos seguem um ritmo que é correspondente ao gênero musical de cada música.
    </p>
    <p class="modules-end col-md-6"><a href="/modulos/notas" class="important-word">Notas -></a></p>
</div>


@endsection