@extends('layout.app', ["current" => "produtos"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/categorias/{{$pro->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label form="nomeProduto">Nome do Produto</label>
                <input type="text" class="form-control" name="nomeProduto" value="{{$pro->nome}}"
                       id="nomeProduto" placeholder="Produto">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>

@endsection