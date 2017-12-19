<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PROFIL;
use Auth;
use App\UnitKerja;
use DB;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $profil = PROFIL::all();
        return view ('profil.indexprofil')->withProfil($profil);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function profilku()
    {
        $id_e   = Auth::user()->id_atasan ;
        $profil = PROFIL::where('id_atasan', '=', $id_e)->orderBy('created_at', 'desc')->get();

        $kode = DB::table('unit_kerjas')->where('id', $id_e)->value('kode');
        $deskripsi = DB::table('unit_kerjas')->where('id', $id_e)->value('deskripsi');


        return view ('profil.showprofil-ku', compact('profil', 'kode', 'deskripsi'));
    }

    public function allprofil (Request $request){
        $profil = PROFIL::all();
        return view ('profil.indexprofil')->withProfil($profil);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profil = PROFIL::findOrFail($id);
        
        $id_e  = DB::table('users')->where('id', $id)->value('id_atasan');

        $kode = DB::table('unit_kerjas')->where('id', $id_e)->value('kode');
        $deskripsi = DB::table('unit_kerjas')->where('id', $id_e)->value('deskripsi');


        return view ('profil.showprofil-ku', compact('profil', 'kode', 'deskripsi'));

        return view ('profil.showprofil')->withProfil($profil);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
