<?php

namespace App\Controllers;

class CarrerasController extends BaseController
{
    public function index()
    {
        return view('main');
    }
    public function fisica(){
        $fisica=view('carreras/layout/header').
        view('carreras/fisica').
        view('carreras/layout/footer');
        return $fisica;
    }
    public function informatica(){
        $informatica=view('carreras/layout/header').
        view('carreras/informatica').
        view('carreras/layout/footer');
        return $informatica;
    }
    public function matematica(){
        $matematica=view('carreras/layout/header').
        view('carreras/matematica').
        view('carreras/layout/footer');
        return $matematica;
    }
    
}