<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller 
{
    public function index()
    {
        return view('index');
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function showCadastroForm()
    {
        return view('cadastro');
    }
    
    public function cadastro(Request $request)
    {
        $dados = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        $dados['password'] = Hash::make($dados['password']);

        $user = User::create($dados);
        
        Auth::login($user);

        return redirect()->route('home'); 
    }

    public function login(Request $request)
    {
        $credenciais = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credenciais)) {
            $request->session()->regenerate();
            return redirect()->route('home'); 
        }

        return back()->withErrors([
            'email' => 'Email ou senha inválidos.',
        ])->onlyInput('email');
    }

  
 
    public function create()
    {
        
    }

    
    public function store(Request $request)
    {
        
    }

    
    public function show(string $id)
    {
        
    }


    public function edit(string $id)
    {
        
    }

  
    public function update(Request $request, string $id)
    {
        
    }

    
    public function destroy(string $id)
    {
        
    }

    public function logout(request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
