<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\Factory as Auth;
use Illuminate\Http\RedirectResponse as Redirection;

use App\Http\Requests\AuthRequest as Request;

trait AuthenticatesUsers
{
    public function __construct()
    {
        $this->middleware("guest:$this->guard", ['except' => 'logout']);
    }

    public function login(Request $request, Auth $auth): Redirection
    {
        $authorized = $auth->guard($this->guard)->attempt($request->only('email', 'password'));

        if ($authorized) {
            return redirect()->intended($this->redirectTo);
        }

        return back()
            ->with('authError', 'Email ou senha incorretos.')
            ->withInput($request->except('password'));
    }

    public function logout(Auth $auth): Redirection
    {
        $auth->guard($this->guard)->logout();

        return redirect('/');
    }
}
