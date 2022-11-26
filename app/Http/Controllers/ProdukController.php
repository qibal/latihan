<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        $data['produk'] = Produk::all();
        return view('produk', $data);
    }
}
