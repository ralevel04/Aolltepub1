<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JADWAL;
use App\PROFIL;
use Auth;


class JadwalController extends Controller
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
        $id_e = Auth::user()->id_atasan ;
        $jdwl= JADWAL::where('id_atasan', '=', $id_e)->orderBy('created_at', 'desc')->get();
       // $jdwl = JADWAL::all();
        return view ('jadwal.indexjdwl')->withJdwl($jdwl);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id_e = Auth::user()->id_atasan ;
        $user= PROFIL::where('id_atasan', '=', $id_e)->orderBy('created_at', 'desc')->get();

        return view ('jadwal.createjdwl')->withUser($user);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();

        $this->validate($request, [
            'name'=> 'required',
            'jam'=> 'required',
            'tgl'=> 'required',
            'agenda'=> 'required',
            'tempat'=> 'required'
            
            ]);

        $jdwl = new JADWAL;

        $jdwl->name     = $request->name;
        $jdwl->tgl      = $request->tgl;
        $jdwl->jam      = $request->jam;
        $jdwl->agenda   = $request->agenda;
        $jdwl->tempat   = $request->tempat;
        $jdwl->id_atasan   = Auth::user()->id_atasan;

        $jdwl->save();
        
        return redirect()->route ('jdwl.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
