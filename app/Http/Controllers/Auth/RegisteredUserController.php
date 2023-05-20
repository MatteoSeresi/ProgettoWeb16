<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Register;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.registrazione');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nome' => ['required', 'string', 'max:255'],
            'Cognome' => ['required', 'string', 'max:255'],
            'Email' => ['required', 'string', 'email', 'max:255', 'unique:registers'],
            'Utente' => ['required', 'string', 'min:8', 'unique:registers'],
            'Password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $register = Register::create([
            'Nome' => $request->Nome,
            'Cognome' => $request->Cognome,
            'Email' => $request->Email,
            'Utente' => $request->Utente,
            'Password' => Hash::make($request->Password),
        ]);

        event(new Registered($register));

        Auth::login($register);

        return redirect(RouteServiceProvider::HOME);
    }
}
