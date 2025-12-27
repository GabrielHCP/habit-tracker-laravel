<?php

namespace App\Http\Controllers;


class SiteController extends Controller
{
    // GET
    public function index() 
    {
        $name = 'Gabriel';
        $habitos = ['Jogar', 'Correr', 'Ler'];

        return view('home', [
            'name' => $name,
            'habitos' => $habitos
        ]);
    }
}
