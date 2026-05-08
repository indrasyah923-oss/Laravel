<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;
class crudcontroller extends Controller
{
    function index()
    {
        $kelas = kelas::all();
        return view('welcome', compact('kelas'));
    }
    function store(request $request)
    {
        $request->validate(['name'=>'required']);
        kelas::create($request->all());
        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }
    function update(request $request,$id){
        $request->validate(['name'=>'required']);
        $kelas = kelas::find($id);
        $kelas->update($request->all());
        return redirect()->route('index')->with('success', 'Data berhasil diupdate');
    }
    function delete($id){
        $kelas = kelas::findOrFail($id);
        $kelas->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
    public function edit($id)
    {
        $kelas = kelas::findOrFail($id);
        return view ('edit', compact('kelas'));
    }
}
