<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        $Mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index',compact('Mahasiswa'));    
    }

    public function create(){
        return view('mahasiswa.create');
    }

    public function store(Request $request){
        // dd($request->except(['_token','submit']));
        Mahasiswa::create($request->except(['_token','submit']));
        return redirect('/mahasiswa');
    }

    public function edit($id){
        $Mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit',compact(['Mahasiswa']));
    }

    public function update($id, Request $request) {
        $Mahasiswa = Mahasiswa::find($id);
        $Mahasiswa->update($request->except(['_token','submit']));
        return redirect('/mahasiswa');
    }

    public function destroy($id) {
        $Mahasiswa = Mahasiswa::find($id);
        $Mahasiswa->delete(); 
        return redirect('/mahasiswa');
    }
}
