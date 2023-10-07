<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function index()
    {
        return view('auth/login');
    }

    /**
     * Handle an incoming Login request.
     */
    public function store(Request $request)
    {
        /**
         * Validation
         **/
        $validated = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        /**
         * Login with table users.
         **/
        if (Auth::guard('web')->attempt($validated)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        /**
         * Login with table petugas.
         **/
        if (Auth::guard('petugas')->attempt($validated)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        /**
         * Login with table masyarakat.
         **/
        if (Auth::guard('masyarakat')->attempt($validated)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        /**
         * Message.
         **/
        Session::flash('status', 'failed');
        Session::flash('message', 'Login Invalid');
        return redirect('/login');
    }

    /**
     * Destroy an Authenticated session.
     */
    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
