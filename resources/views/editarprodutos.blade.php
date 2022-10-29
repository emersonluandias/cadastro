@extends('layout.app', ["current" => "produtos"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/produtos/{{$pro->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label form="nomeProduto">Nome do Produto</label>
                <input type="text" class="form-control" name="nomeProduto" id="nomeProduto"  value="{{$pro->nome}}" placeholder="Produto">
            </div>
            <div class="form-group">
                <label form="estoque">Estoque</label>
                <input type="text" class="form-control" name="estoque" id="estoque" value="{{$pro->estoque}}" placeholder="Estoque">
            </div>
            <div class="form-group">
                <label form="estoque">Preco</label>
                <input type="text" class="form-control" name="preco" id="preco" value="{{$pro->preco}}"placeholder="Preco">
            </div>
                <select class="custom-select mr-sm-2" name="nomeCategoria"  id="categoria_id"  placeholder="Categoria">
                    <option selected>Escolha a Categoria...</option>
            @foreach($cat as $cats)
                    <option value="{{$cats->id}}">{{$cats->id}}</option>
            @endforeach
                </select>
                
                <select class="custom-select mr-sm-2" name="nomecat"  id="categoria_nome"  placeholder="Categoria">
                 <option selected>Escolha nome Categoria...</option>
            @foreach($cat as $cats)
                <option value="{{$cats->nome}}">{{$cats->nome}}  </option>
                value="{{$cats->categoria_nome}}"
            @endforeach
                </select>


                    <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                    <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>
        
 @endsection