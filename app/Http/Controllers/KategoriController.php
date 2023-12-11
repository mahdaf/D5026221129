<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KategoriController extends Controller
{
    public function index()
    {
        $kategori = DB::table('kategori')->get();
    	return view('kategori',['kategori' => $kategori]);
    }

    public function hasil(Request $request){
        $ID = $request->input('category');
        $kategori = DB::table('kategori')->where('ID', $ID)->get();
        return view('pilihan', ['kategori' => $kategori]);
    }


}
