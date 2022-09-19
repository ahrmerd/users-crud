<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

class LoginController extends Controller
{
    /**
     * Shows the login page.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
        // dump($data);
        // dd($request->boolean('remember'));
        $loggedIn = Auth::attempt(credentials: $data, remember: $request->boolean('remember'));
        // dd(Auth::user()->isAdmin());
        if (!$loggedIn) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        } else {
            $request->session()->regenerate();
            return redirect()->intended(RouteServiceProvider::HOME);
        }
    }

    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect('/');
    }
}
