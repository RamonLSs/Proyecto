<?php

namespace App\Http\Controllers;

use App\Http\Requests\CambiarContraseñaRequest;
use App\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function index(){

        return view('usuarios.perfil');
    }



    public function cambiarContraseña(){
        return view('usuarios.cambiarcontraseña');
    }

    public function guardarContraseña(CambiarContraseñaRequest $request){

            $datos = $request->validated();

            $usuario = \Auth::user();

            if(!Hash::check($datos["contraseña"], $usuario->password)){
                return view('usuarios.cambiarcontraseña')->with("error", "La contraseña antigua no coincide con la introducida");
            }

            $usuario->password = Hash::make($datos["password"]);

            $usuario->update();

            return redirect('perfil');

    }
}
