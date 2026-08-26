<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return "Halaman Home";
    }

    public function about()
    {
        return "Halaman About";
    }

    public function contact()
    {
        return "Halaman Contact";
    }
}