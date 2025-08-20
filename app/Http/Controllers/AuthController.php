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
        $user = User::find(2); // busca no banco de dados o usuario com id = 1
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
        // b) Usando Gate
        if (Gate::allows('user_is_admin')) {
            echo 'Bem-vindo, admin.';
        } else {
            echo 'NOK1.';
        }
    }

    public function onlyUsers()
    {
        if (Gate::allows('user_is_user')) {
            echo 'Bem-vindo, user.';
        } else {
            echo 'NOK2.';
        }
    }
}
