@extends('app');

@section('content')
    <h1>Adicionar CEP</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('salvar')}}" method="POST">
        @csrf
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
@endsection