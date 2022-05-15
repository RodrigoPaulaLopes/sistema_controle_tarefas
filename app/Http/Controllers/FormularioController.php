<?php

namespace App\Http\Controllers;

use App\Models\Tarefas;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function formulario(Request $request)
    {
        return view("formulario");
    }
    public function inserir(Request $request)
    {

        if (isset($request->id)) {

            $data = Carbon::createFromFormat('d/m/Y', $request->dataEmissao)->format('Y-m-d');

            $tarefa = Tarefas::find($request->id);
            $tarefa->nome = $request->nome;
            $tarefa->dataPrazo = $request->dataPrazo;
            $tarefa->dataEmissao = $data;
            $tarefa->descricao = $request->descricao;
            $tarefa->status = $request->status;
            $tarefa->usuario = $request->usuario;

            $update = $tarefa->update();

            if ($update) {
                return view("formulario", ['msg' => "alterado com sucesso"]);
            }
        } else {

    
           
            
           $data = Carbon::createFromFormat('d/m/Y', $request->dataEmissao)->format('Y-m-d');
  

     
            $tarefa = new Tarefas();
            $tarefa->nome = $request->nome;
            $tarefa->dataPrazo = $request->dataPrazo;
            $tarefa->dataEmissao = $data;
            $tarefa->descricao = $request->descricao;
            $tarefa->status = $request->status;

            $tarefa->usuario = $request->usuario;

            $tarefa->save();

            return view("formulario", ["msg" => "inserido com sucesso"]);
        }
    }
    public function buscarPorId($id)
    {
        $tarefa =  Tarefas::where('id', $id)->get();


        return view("formulario", ['tarefa' => $tarefa[0]]);
    }

    public function excluir($id)
    {
        $tarefa =  Tarefas::where('id', $id);

        $tarefas = Tarefas::all();
        $tarefa->delete();

        if ($tarefa) {
            return redirect()->route('todos', ["msg" => "Deletado com sucesso", "tarefas" => $tarefas]);
        }
    }
    public function finalizar($id)
    {
        $tarefa = Tarefas::find($id);
        $tarefa->status = 'F';
        $update = $tarefa->update();

        $tarefas = Tarefas::all();
        if ($update) {
            return view('todos', ['msg' => "Tarefa finalizada", "tarefas" => $tarefas]);
        }
    }
}
