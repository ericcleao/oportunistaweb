<?php

namespace App\Http\Controllers\CustomAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Hash;
use Validator;

## TODO 
# arrumar validacao


class CustomRegisterController extends Controller
{
    public function salva(Request $request)
    {
    	$input = $request->all();
    	$input['password'] = Hash::make($input['password']);
    	User::create($input);
    	return redirect('home');
    }
}
