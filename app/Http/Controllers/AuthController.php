<?php

namespace App\Http\Controllers;

// imports
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
