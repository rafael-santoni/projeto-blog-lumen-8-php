<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('site.login', ['title' => 'RS-Dev Blog | Login']);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->input('email'))->first();

        if(!$user) {
            return response()->json(['message' => 'Ocorreu um erro, email ou senha inválidos'], 401);
        }
        
        if(!password_verify($request->input('password'), $user->password)) {
            return response()->json(['message' => 'Ocorreu um erro, email ou senha inválido'], 401);
        }
        
        $_SESSION['userId'] = $user->id;
        return response()->json(['message' => 'Logado com sucesso'], 200);
    }

    public function destroy()
    {
        if(isset($_SESSION['userId'])) {
            session_destroy();
            return redirect('/');
        }
    }
}
