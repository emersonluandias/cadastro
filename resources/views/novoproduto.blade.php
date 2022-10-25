@extends('layout.app', ["current" => "produtos"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/produtos" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeProduto">Nome do Produto</label>
                <input type="text" class="form-control" name="nomeProduto" 
                       id="nomeProduto" placeholder="Produto">
            <div class="form-group">
                <label for="estoque">Estoque</label>
                <input type="text" class="form-control" name="estoque" 
                       id="estoque" placeholder="Estoque">
            <div class="form-group">
                <label for="estoque">Preco</label>
                <input type="text" class="form-control" name="preco" 
                       id="preco" placeholder="Preco">

            </div>
            <select class="custom-select mr-sm-2" name="nomeCategoria" option value="categoria_id">
            <option selected>Escolha a Categoria...</option>
            @foreach($cat as $cats)

            <option value="1">{{$cats->id}}</option>
            
             
            @endforeach
            </select>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>

@endsection