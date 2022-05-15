<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class InformacaoController extends Controller
{
    public function informacao(Request $request)
    {
        $id = session(key: 'usuario')->id;
        $usuario = Usuario::find($id);

        return view('informacao', ['usuario' => $usuario]);
    }
}
