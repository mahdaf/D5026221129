<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KopiController extends Controller
{
    public function index()
    {
        $kopi = DB::table('kopi')->get();
    	return view('kopi',['kopi' => $kopi]);
    }

    // method untuk edit data kopi
    public function edit($id)
    {
        $kopi = DB::table('kopi')->where('kodekopi',$id)->get();
        return view('editkopi',['kopi' => $kopi]);

    }

    // update data kopi
    public function update(Request $request)
    {
        // update data kopi
        DB::table('kopi')->where('kodekopi',$request->id)->update([
            'merkkopi' => $request->merkkopi,
            'stockkopi' => $request->stockkopi,
            'tersedia' => $request->tersedia
        ]);
        return redirect('/kopi');
    }

    // method untuk hapus data kopi
    public function hapus($id)
    {
        DB::table('kopi')->where('kodekopi',$id)->delete();

        return redirect('/kopi');
    }

    public function view($id)
    {
        $kopi = DB::table('kopi')->where('kodekopi',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('lihatkopi',['kopi' => $kopi]);

    }

}
