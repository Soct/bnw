<?php

namespace Task\Controllers;

class PagesController
{
    public function home()
    {
        return view('index');
    }
    
    public function contact()
    {
        $company = "Perdriolle";

        return view('contact', compact('company'));
    }
    
    public function about()
    {
        return view('about');
    }
}
