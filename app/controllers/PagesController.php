<?php

namespace Bnw\Controllers;


use Bnw\Core\App;

class PagesController
{
    public function home()
    {
        return view('index');
    }
    
    public function contact()
    {
        $company = "Black'n White";

        return view('contact', compact('company'));
    }
    
    public function about()
    {
        return view('about');
    }

    public function tarif() {
        $tarifs = App::get('database')->selectAllTarif();
        return view('tarif', compact('tarifs'));
    }


}
