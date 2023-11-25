<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\User;

class LoginController extends Controller
{
    public function index(Request $request){
        $erro= '';
        if($request->get('erro')==1){
            $erro= 'Usuário ou senha não existem';
        };

        return view('produtos.login',['erro'=>$erro]);
    }

    public function autenticar(Request $request){
        $regras=[
            'usuario'=> 'email',
            'senha'=>'required'
        ];

        $feedback=[
            'usuario.email'=>'O campo usuário é obrigatório!',
            'senha.required'=>'O campo senha é obrigatório!'
        ];

        $request->validate($regras, $feedback);

        $user= new User();

        $usuario= $user->where('usuario',$usuario)->where('password',$password)->get()->first(); 

        if(isset($usuario->name)){
            echo('Usuário existe');
        } else {
            return redirect()->route('site.login', ['erro'=>1]);
        }
    }
}
