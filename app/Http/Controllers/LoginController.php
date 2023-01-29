<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request)
    {
        //todo: better authentication:
        // what to send if credentials are incorrect?
        // what to do after user logging in?
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return true;
        }

        return false;
    }

    public function get(Request $request)
    {
        return $request->user();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }

    public function update(Request $request)
    {
        if (!$request->password) {
            $validatorFields = [
                'email' => ['required', 'email'],
                'name' => ['required', 'min:3', 'max:15']
            ];
        } else {
            $validatorFields = [
                'email' => ['required', 'email'],
                'name' => ['required', 'min:3', 'max:15'],
                'password' => ['required', Password::min(8)],
                'password_confirm' => ['required', 'same:password']
            ];
        }
        $validator = Validator::make($request->all(), $validatorFields);
        if ($validator->invalid()) {
            return [
                'errors' => $validator->errors()->toArray(),
                'error' => true
            ];
        } else {
            $request->user()->update($request->all());
            return true;
        }


    }
}
