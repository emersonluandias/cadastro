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
            <select class="custom-select mr-sm-2" name="categoria_id" option value="categoria_id"> id="categoria_id"
                <option selected>Escolha a Categoria...</option>
            
               
                  
                <option value="1">"{{'nomeCategoria'}}"</option>
                <option value="2">"{{'nomeCategoria'}}"</option>
                <option value="3">"{{'nomeCategoria'}}"</option>
              

            </select>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>

@endsection