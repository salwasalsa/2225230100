<?php

namespace App\Http\Controllers;

use App\Models\Salwa;
use Illuminate\Http\Request;

class SalwaController extends Controller
{
    public function index(){
        $salwa = Salwa::all();
        return view ('salwa.index', compact(['salwa']));
    }

    public function create()
    {
        return view('salwa.create');
    }

    public function store(Request $request)
    {
        //dd($request->except(['_token','submit']));
        Salwa::create($request-> except (['_token','submit']));
        return redirect('/salwa');
    }

    public function edit($id)
    {
        $salwa = Salwa::find($id);
        return view('salwa.edit', compact(['salwa']));
    }

    public function update($id, Request $request)
    {
        $salwa = Salwa::find($id);
        $salwa->update($request->except (['_token','submit']));
        return redirect('/salwa');
    }

    public function destroy($id)
    {
        $salwa = Salwa::find($id);
        $salwa->delete();
        return redirect('/salwa');
    }
}
