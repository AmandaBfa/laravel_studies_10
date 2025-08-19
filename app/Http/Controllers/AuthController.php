<?php

namespace App\Http\Controllers;

// imports
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

// classe
class AuthController extends Controller
{
    // metodo login
    public function login(): RedirectResponse
    {
        $user = User::find(1); // busca no banco de dados o usuario com id = 1
        Auth::login($user); // faz a autenticação do login do usuario, sem precisar de senha
        return redirect()->route('home');
    }

    // metodo login
    public function logout(): RedirectResponse
    {
        Auth::logout(); // faz com que o usuario seja delogado(logout)
        return redirect()->route('home');
    }

    public function onlyAdmins()
    {
        // // a) Usando role diretamente
        // if (Auth::user()->role !== 'admin') {
        //     echo 'User não é admin.';
        // } else {
        //     echo 'Bem-vindo';
        // }

        // // b) Usando Gate
        // if (Gate::allows('user_is_admin')) {
        //     echo 'Bem-vindo';
        // } else {
        //     echo 'User não é admin.';
        // }

        // c) Usando método can() do usuário
        if (Auth::user()->can('user_is_admin')) {
            echo 'Bem-vindo!';
        } else {
            echo 'Não autorizado';
        }
    }
}
