<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Support\Facades\Auth;

class ControladorProduto extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pros = Produto::all();
        return view ('produtos', compact('pros'));
        $cat = Categoria::all();
        return view ('categorias', compact('cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $cat = Categoria::all();
        return view ('novoproduto',compact('cat'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request ,)
    {
        $pro = new Produto();
        $pro->nome = $request->input('nomeProduto');
        $pro->estoque = $request->input('estoque');
        $pro->preco = $request->input('preco');
        $pro->categoria_id = $request->input('nomeCategoria'); 
        $pro->categoria_nome = $request->input('nomecat');        
        $pro->save();
        return redirect('/produtos');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $cat = Categoria::all();
      $pro = Produto::find($id);
        if(isset($pro)) {
        
           
            return view ('editarprodutos', compact('pro','cat'));
         }
        return redirect('/produtos');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    
    {
        $pro = Produto::find($id);
          if(isset($pro)) {
            $pro->nome = $request->input('nomeProduto');
            $pro->estoque = $request->input('estoque');
            $pro->preco = $request->input('preco');
            $pro->categoria_id = $request->input('nomeCategoria');
            $pro->categoria_nome = $request->input('nomecat');
            
            $pro->save();
           }
          return redirect('/produtos');
      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pro = Produto::find($id);
        if (isset($pro)){
            $pro->delete();
        }
        return redirect('/produtos');

 }
}