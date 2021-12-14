<?php
namespace App\Http\Controllers;

class postController extends Controller{

    public function index(){
        
        return view('index');
    }

    public function rechercher(){
        return view ('rechercher');
    }
    public function connexion(){
        return view('connexion');
    }
    public function inscription(){
        return view('inscription');
    }
}