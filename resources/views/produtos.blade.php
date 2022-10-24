@extends('layout.app', ["current" => "produtos" ])

@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Produtos</h5>

@if(count($pros) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome do Produto</th>
                    <th>Preco</th>
                    <th>Estoque</th>
                    <th>Acoes</th>
                </tr>
            </thead>
            <tbody>
@foreach($pros as $pro)

    </thead>
    <tbody>
        <tr>
            <td>{{$pro->id}}</td>
            <td>{{$pro->categoria_id}}</td>
            <td>{{$pro->nome}}</td>
            <td>
                <a href="/produtos/editar/{{$pro->id}}" class="btn btn-sm btn-primary">Editar</a>
                <a href="/produtos/apagar/{{$pro->id}}" class="btn btn-sm btn-danger">Apagar</a>
            </td>
        </tr>
 @endforeach              
    </tbody>
</table>
@endif    
</div>
<div class="card-footer">
<a href="/produtos/novo" class="btn btn-sm btn-primary" role="button">Novo Produto</a>
</div>
</div>



@endsection