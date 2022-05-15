<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefas;
use Illuminate\Support\Facades\DB;

class TodosController extends Controller
{
    public function todos(Request $request)
    {

        
        
        
        $tarefa = $request->query('tarefa');
       if($tarefa){

        $tarefas = DB::table('tarefas')
        ->join('usuarios', 'tarefas.usuario', '=', 'usuarios.id')
        ->select("tarefas.id",
        "tarefas.nome as nome_tarefa",
        "tarefas.dataEmissao",
        "tarefas.dataPrazo",
        "tarefas.descricao",
        "tarefas.status",
        "usuarios.nome as usuario_nome")
        ->where('tarefas.nome', 'like',  '%'.$tarefa.'%')
        ->get();

        // echo $tarefas;
        return view("todos", ["tarefas" => $tarefas]);
       }else{

        $tarefas = DB::table('tarefas')
        ->join('usuarios', 'tarefas.usuario', '=', 'usuarios.id')
        ->select("tarefas.id",
        "tarefas.nome as nome_tarefa",
        "tarefas.dataEmissao",
        "tarefas.dataPrazo",
        "tarefas.descricao",
        "tarefas.status",
        "usuarios.nome as usuario_nome")
        ->get();
        return view("todos", ["tarefas" => $tarefas]);
       }
        

    }
}
