<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<title>CEP - Início</title>
</head>
<body> 
<div class="container">
    <h1 class="mb-5">Endereços Cadastrados</h1>

    <a class="btn btn-success" href="{{route('adicionar')}}">
        Adicionar CEP
    </a>

    <table class="table mt-5">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">CEP</th>
                <th scope="col">Logradouro</th>
                <th scope="col">Número</th>
                <th scope="col">Bairro</th>
                <th scope="col">Cidade</th>
                <th scope="col">Estado</th>
                <th scope="col">Data da Criação</th>
            </tr>
        </thead>
        <tbody>
        @foreach($enderecos as $endereco)
            <tr>
                <td>{{$endereco->id}}</td>
                <td>{{$endereco->cep}}</td>
                <td>{{$endereco->logradouro}}</td>
                <td>{{$endereco->numero}}</td>
                <td>{{$endereco->bairro}}</td>
                <td>{{$endereco->cidade}}</td>
                <td>{{$endereco->estado}}</td>
                <td>{{(new DateTime($endereco->created_at))->format('d/m/Y H:i:s')}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>