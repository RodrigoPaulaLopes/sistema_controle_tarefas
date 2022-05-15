<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\ViewErrorBag;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function entrar(Request $request)
    {

        $usuario = Usuario::where('usuario', '=', $request->usuario)->get();

      

        if(isset($usuario[0]->id)){
            $usuario = $usuario[0];
            if($usuario->senha == $request->senha){

                session(["usuario" => $usuario]);
                return view('index', ["msg" => "logado com sucesso"]);
            }else{
                $msg = "Senha incorreta";
                return view('login', ['msg' => $msg]);
            }
        }else{
            $msg = "usuario inexistente";
            return view('login', ['msg' => $msg]);

        }
        
    }

    public function sair(Request $request)
    {
        $request->session()->forget('usuario');
        return view('login');
        
    }
    public function registrar(Request $request)
    {
        return view('registrar');
    }
    public function registrarInserir(Request $request)
    {
        $usuario = $request->all();
        Usuario::create($usuario);

        return redirect()->route('login');
    }
}
