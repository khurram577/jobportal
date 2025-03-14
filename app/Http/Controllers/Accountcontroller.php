<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use function Laravel\Prompts\error;

class Accountcontroller extends Controller
{
    public function registration() {
        return view('front.account.registration');

    }
    public function processregistration(Request $request) {
        $Validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:5|same:confirm_password',
            'Confirm_Password' => 'required|same:password',
        ]);

        if ($Validator->passes()) {

        }

        else {
            return redirect()->json([
                'status' => false,
                'error' => $Validator->errors()
            ]);
        }

    }

    public function login() {
        return view('front.account.login');


    }
}
