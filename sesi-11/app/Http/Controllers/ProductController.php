<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        return "Halaman Produk";
    }

    public function create()
    {
        return "Halaman Tambah Produk";
    }

    public function show($id)
    {
        return "Detail Produk ID: " . $id;
    }
}