@extends('layouts.main')
@section('title', 'Notas')
@section('content')

<div class="col-md-6 offset-md-3">
    <h1 class="modulo-title">Notas</h1>
    <p class="modulo-text">
    &emsp;&emsp;Notas musicais são os elementos mínimos de um som. Quando um som é produzido ele tem uma
    frequencia, e, quando escutamos esse som, nós atribuimos ele à uma nota diferente.
    </p>
    <br>
    <h2 class="modulo-subtitle">Como representar essas notas</h2>
    <p class="modulo-text">
    &emsp;&emsp;As notas são representadas por letras, começando pelo lá sendo representado pela letra A, pois é a nota mais grave que pode ser escutada
    e assim subindo até o sol representado pela letra G, a tabela representando todas fica assim:
    <br><br>
    C -> Dó<br>D -> Ré<br>E -> Mi<br>F -> Fá<br>G -> Sol<br>A -> Lá<br>B -> Sí<br><br>
    &emsp;&emsp;Como pode ser observado nós temos 7 notas diferentes, porém quando nós escutamos músicas conseguimos perceber que temos muito mais que 7
    notas. A resposta é simples, as notas se repetem. Uma vez que começamos no Dó e chegamos no Sí, a gente volta para o Dó isso é por que elas são
    <a href="/modulos/escalas/oitavas" class="important-word">oitavadas</a>, que vamos ver mais para frente com mais detalhes.
    <br>
    &emsp;&emsp;Ao todo temos 12 notas diferentes, sendo 7 naturais e 5 acidentes, que vamos falar no próximo tópico.
    </p>
    <p class="modulo-end col-md-6"><a href="/modulos/musica"class="important-word"><- O que é musica?</a>&emsp;&emsp;<a href="/modulos/acidentes" class="important-word">Sustenidos e Bemols -></a></p>
</div>

@endsection