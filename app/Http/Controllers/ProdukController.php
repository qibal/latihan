<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
class ProdukController extends Controller
{
    public function index(){
        $data['produk'] = Produk::all();
        return view('produk', $data);
    }
    public function hapus($id){
        $data['produk'] = Produk::find($id)->delete();
        return redirect()->back();
    }
        public function tambah(Request $request){
        $data['produk'] = Produk::insert($request->except('_token', '_method'));
        return redirect()->back();
    }
}
