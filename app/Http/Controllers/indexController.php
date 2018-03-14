<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use App\Turma;

class indexController extends Controller
{
    public function index(){
        $turmas = Turma::all();
        return view('index',compact('turmas'));
    }
}
