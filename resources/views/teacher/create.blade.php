@extends('layouts.main')
@section('title', 'Busca')
@section('content')

<div id="teacher-create-container" class="col-md-6 offset-md-3">
<h1>Cadastre como professor</h1>
<form action="/teacher" method="POST" enctype="multipart/form-data">
@csrf    
    <div class="form-group">
        <label for="image">Foto:</label><br>
        <input type="file" class="form-control-file" id="image" name="image">
    </div>

    <div class="form-group">
        <label for="teacher">Locais de aula: (Pode selecionar mais de uma opção)</label>
            <div class="form-group">
            <input type="checkbox" name="class[]" value="EAD"> EAD 
        </div>
        <div class="form-group">
            <input type="checkbox" name="class[]" value="Casa do Aluno"> Casa do Aluno 
        </div>
        <div class="form-group">
            <input type="checkbox" name="class[]" value="Casa do Professor">  Casa do Professor
        </div>
        <div class="form-group">
            <input type="checkbox" name="class[]" value="Sala de aula / Estúdio">  Sala de aula / Estúdio
        </div>
    </div>

    <div class="form-group">
        <label for="image">Valor da aula:</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="00.00" required>
    </div>
    
    <div class="form-group">
        <label for="teacher">Valores adicionais: (Opcional)</label>
        <div class="form-group">
            <input type="checkbox" name="addprices[]" value="Custo de transporte"> Custo de transporte 
        </div>
        <div class="form-group">
            <input type="checkbox" name="addprices[]" value="Alimentação"> Custo de alimentação 
        </div>
        <div class="form-group">
            Outros: <input type="text" name="addprices[]" value="">
        </div>
    </div>

    <div class="form-group">
        <label for="teacher">Estado:</label><br>
    <input list="state" name="state" required>
        <datalist id="state">
            <option value="Acre">
            <option value="Alagoas">
            <option value="Amapá">
            <option value="Amazonas">
            <option value="Bahia">
            <option value="Ceará">
            <option value="Distrito Federal">
            <option value="Espírito Santo">
            <option value="Goiás">
            <option value="Maranhão">
            <option value="Mato Grosso">
            <option value="Mato Grosso do Sul">
            <option value="Minas Gerais">
            <option value="Pará">
            <option value="Paraíba">
            <option value="Paraná">
            <option value="Pernambuco">
            <option value="Piauí">
            <option value="Rio de Janeiro">
            <option value="Rio Grande do Norte">
            <option value="Rio Grande do Sul">
            <option value="Rondônia">
            <option value="Roraima">
            <option value="Santa Catarina">
            <option value="São Paulo">
            <option value="Sergipe">
            <option value="Tocantins">
        </datalist>
    </div>
    
    <div class="form-group">
        <label for="teacher">Cidade: </label>
        <input type="text" class="form-control" id="city" name="city" placheholder="Nome da cidade:" required>
    </div>

    <div class="form-group">
        <label for="teacher">Instrumentos ensinados:</label>
        <div class="form-group">
            <input type="checkbox" name="instruments[]" value="Violão / Guitarra"> Violão / Guitarra
        </div>
        <div class="form-group">
            <input type="checkbox" name="instruments[]" value="Baixo"> Baixo
        </div>
        <div class="form-group">
            <input type="checkbox" name="instruments[]" value="Ukulele"> Ukulele
        </div>
        <div class="form-group">
            <input type="checkbox" name="instruments[]" value="Piano"> Piano / Teclado
        </div>
        <div class="form-group">
            <input type="checkbox" name="instruments[]" value="Bateria"> Bateria
        </div>
        <div class="form-group">
            <input type="checkbox" name="instruments[]" value="Violino"> Violino
        </div>
        <div class="form-group">
            <input type="checkbox" name="instruments[]" value="Flauta"> Flauta
        </div>
        <div class="form-group">
            Outros: <input type="text" name="instruments[]" value=""> 
        </div>
    </div>
    
    <div class="form-group">
        <label for="teacher">Sobre mim e descrição da aula: (O que achar relevante)</label>
        <textarea name="biography" id="biography" class="form-control" placeholder=""></textarea>
    </div>
  
    <br>
    <input type="submit" class="btn btn-primary" value="Cadastrar">
</form>
</div>

@endsection