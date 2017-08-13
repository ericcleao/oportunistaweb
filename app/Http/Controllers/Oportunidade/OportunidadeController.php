<?php

namespace App\Http\Controllers\Oportunidade;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OportunidadeController extends Controller
{
    public function index()
    {
    	return view('oportunidade.index');
    }
}
