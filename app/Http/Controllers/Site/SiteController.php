<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    
    public function __construct() {
        
        //opcao de filtro de autendicacao
        //seleciona somente os modulos que vao autenticar
        #$this->middleware('auth')->only(['contato', 'categoria'[);
        
        //aqui o inverso, os que estao marcados sao os unicos que estao fora da regra
        #$this->middleware('auth')->except(["index", "contato"]);     
        
        
    }

    public function index(){
        
        $title = "Título teste";
        
        $xss = "<script>alert('Ataque XSS');</script>";
        
        $var1 = "123";
        
        $arrayData = [];
        
        #return view('teste', ["teste" => $teste]);
        
        //site. refere-se a pasta
        return view('site.home.index', compact('title', 'xss', 'var1', 'arrayData'));
    }
    
    public function contato(){
        return view('site.contact.index');
    }
    
    public function categoria($id){
        return "listagem dos posts da categoria - {$id}";
    }
    
    public function categoriaOp($id = 1){
        return "listagem dos posts da categoria - {$id}";
    }
}
