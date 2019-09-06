<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Product;

class ProdutoController extends Controller
{

    private $product;

    public function __construct(Product $product){

        $this->product = $product;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->product->all();
        return view("painel.products.index", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function tests(){

        /* uma das formas de cadastro
        $prod = $this->product;
        $prod->name = "Nome do produto";
        $prod->number = 131231;
        $prod->active = true;
        $prod->category = "eletronicos";
        $prod->description = "Description do produto aqui";
        $insert = $prod->save();

        if($insert){
            return "Inserido com sucesso";
        }else{
            return "Falha ao inserir";
        }*/

        $insert = $this->product->create([
                "name"          => "Nome do produto 2",
                "number"        => 414141,
                "active"        => true,
                "category"      => "eletronicos",
                "description"   => "teste teste"
        ]);

        if($insert){
            return "Inserido com sucesso, id: {$insert->id} ";
        }else{
            return "Falha ao inserir";
        }

        
    }

}
