@extends('layouts.main')
@section('title', 'Oitavas')
@section('content')

<div class="col-md-6 offset-md-3">
    <h1 class="modulo-title">Oitavas</h1>
    <p class="modulo-text">
        &emsp;&emsp;Quando estamos começamos a falar as notas uma hora nós repetimos elas, Dó, Ré, Mi, Fá, Sol, Lá, Si, Dó... Esse ultimo Dó está uma oitava acima do primeira.
        Mas porque uma oitava? Isso se deve aos graus musicais, sabemos que a nota Si é o setimo grau, então quando voltamos para a nota Dó ele seria o oitavo grau. Dai vem o nome,
        porém de uma maneira concreta o que isso impacta na música? Quanto mais vamos subindo nos graus musicais, mais aguda vai ficando o som,
        então mesmo sendo a nota Dó novamente ela tem um som mais agudo do que o anterior. E em termos científicos ele é algo exato, uma nota oitavada
        é o dobro da frequência da nota base, exemplo a nota Dó é 33Hz já ela oitvada é 66Hz e se pegar a próxima oitava é 132Hz e assim por diante.
        <br>
        &emsp;&emsp;Os pianos geralmente tem 7 oitavas, já um violão possue 4 oitavas. Mas qual é o intervalo de uma oitava? Como eu vejo isso no instrumento?
        Se voltar para as <a href="/modulos/notainstrumentos" class="important-word">notas dos instrumentos</a> lá tem as notas presentes no piano e no violão.
        No piano é muito fácil de identificar as notas e suas oitavas, já que elas vão ficando mais agudas para o lado direito do instrumento, já no violão a 6° corda
        é a corda mais grave e normalmente é afinada em Mi, igual à primeira corda, a diferença é que a primeira corda está 2 oitavas acima da corda mais grave.
        <br>
    </p>
    <p class="modulo-end"><a href="/modulos/escalas/grausmusicais" class="important-word"><- Graus Musicais</a>&emsp;&emsp;<a href="/modulos/acordes/acordes" class="important-word">Definição de acorde -></a></p>
</div>


@endsection