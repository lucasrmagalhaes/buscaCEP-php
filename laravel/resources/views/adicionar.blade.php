<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>CEP - Informações</title>
  </head>
  <body> 
    <div class="container">
        <h1>CEP - Informações</h1>
        <form action="{{route('buscar')}}" method="GET">
            <div class="mb-3">
                <label>CEP:</label>
                <input type="text" class="form-control" name="cep" value="{{$cep}}">
            </div>
            <div class="mb-3">
                <label>Logradouro:</label>
                <input type="text" class="form-control" name="logradouro" value="{{$logradouro}}">
            </div>
            <div class="mb-3">
                <label>Número:</label>
                <input type="text" class="form-control" name="numero">
            </div>
            <div class="mb-3">
                <label>Bairro:</label>
                <input type="text" class="form-control" name="bairro" value="{{$bairro}}">
            </div>
            <div class="mb-3">
                <label>Cidade:</label>
                <input type="text" class="form-control" name="cidade" value="{{$cidade}}">
            </div>
            <div class="mb-3">
                <label>Estado:</label>
                <input type="text" class="form-control" name="estado" value="{{$estado}}">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>           
        </form>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>