@extends('layouts.main')
@section('title', 'Sustenido e Bemol')
@section('content')

<div class="col-md-6 offset-md-3">
    <h1 class="modulo-title">Sustenido e Bemol</h1>
    <p class="modulo-text">
    &emsp;&emsp;Na música ocidental, temos 12 notas, 7 naturais (Dó, Ré, Mi, Fá, Sol, Lá, Sí) e 5 acidentes que podem ser bemol ou sustenido.
    Parece complicado mas é bem simples, as 12 notas ficam na seguinte ordem:
    <br><br>
    C -> Dó<br>C# -> Dó sustenido ou Db -> Ré bemol<br>D -> Ré<br>D# -> Ré sustenido ou Eb -> Mi bemol<br>E -> Mi<br>F -> Fá<br>F# -> Fá sustenido ou Gb -> Sol bemol<br>G -> Sol<br>G# -> Sol sustenido ou Ab -> Lá bemol<br>A -> Lá<br>A# -> Lá sustenido ou Bb -> Sí bemol<br>B -> Sí
    <br><br>
    &emsp;&emsp;Ainda está confuso, porém tudo vai fazer sentido quando começarmos a ver <a href="/modulos/escalas/escalas" class="important-word">escalas</a>. Mas se a sua pergunta é: A mesma nota tem nomes diferentes?
    A resposta é: Sim! A mesma nota tem nomes diferentes, elas soam totalmente iguais, mas existe diferenças de quando chamar de bemol ou quando chamar ela de sustenido, resumindo o nome depende das outras notas presentes na <a href="/modulos/escalas/escalas" class="important-word">escala</a> que está sendo usada para que seja possivel saber qual é a maneira correta de se referir a tal nota.
    </p>
    <p class="modulo-end"><a href="/modulos/notas" class="important-word"><- Notas</a>&emsp;&emsp;<a href="/modulos/intervalos" class="important-word">Intervalos -></a></p>
</div>


@endsection