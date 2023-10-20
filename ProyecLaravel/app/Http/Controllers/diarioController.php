<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validateDiarioForm;


class diarioController extends Controller
{

    public function metodoInicio(){
        return view('welcome');
    }

    public function metodoFormulario(){
        return view('formulario');
    }

    public function metodoRecuerdos(){
        return view('recuerdos');
    }

    public function guardarRecuerdo(validateDiarioForm $req){

        return redirect('/form')->with('confirmacion','Tus datos llegaron al controlador');
    
        //return $req->all();


    /*$validated = $req->validate([
            'txtTitulo' => 'required|max:255',
            'txtRecuerdo' => 'required|min:5',
        ]); */

      

        /* echo "<p>";
        echo $req->ip();
        echo " - ";
        echo $req->path();
        echo " - ";
        echo $req->method();
        echo " - ";
        echo $req->input('txtTitulo');
        echo " - ";
        echo $req->url();
        echo"</p>"; */



        
    }




}
