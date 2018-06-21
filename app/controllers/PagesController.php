<?php

namespace Bnw\Controllers;

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
}
