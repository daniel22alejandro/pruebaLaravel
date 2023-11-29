<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){
        //Vamos a crear el proceso de validacion
        $request->request->add(['cedula'=>Str::slug($request->cedula)]);

        $this->validate($request,[
            'name'=>'required|min:3|max:50',
            'cedula'=>'required|unique:users|min:3|max:50',
            'telefono'=>'required|unique:users|max:60',
            'direccion'=>'required|confirmed'

        ]);

        User::create([
            'name'=>$request->name,
            'cedula'=>$request->cedula,
            'telefono'=>$request->telefono,
            'direccion'=>$request->direccion
        ]);
        auth()->attemp([
            'nombre'=>$request->nombre,
            'cedula'=>$request->cedula,
        ]);

        return redirect()->route('post.index');
    }
}
