<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\keluar;


class SMSKController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $smsk= keluar::all();
        return view ('skeluar.index')->withSmsk($smsk);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('test.keluar.createkeluar');
        
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
            'no_agenda'=> 'required',
            'asal_surat'=> 'required',
            'tgl_keluar'=> 'required',
            'no_surat'=> 'required',
            'tgl_surat'=> 'required',                            
            'perihal'=> 'required',
            'penerima'=> 'required',
            'posisi'=> 'required',
            'keterangan'=> 'required',
            'berkas'=> 'required'
            //'id_atasan'=> 'required'
            ]);



        $skeluar = new keluar;


        $skeluar->no_agenda   = $request->no_agenda;
        $skeluar->asal_surat  = $request->asal_surat;
        $skeluar->tgl_keluar   = $request->tgl_keluar;
        $skeluar->no_surat    = $request->no_surat;
        $skeluar->tgl_surat   = $request->tgl_surat;
        $skeluar->perihal     = $request->perihal;

        $skeluar->penerima    = $request->penerima;
        $skeluar->posisi      = $request->posisi;
        $skeluar->berkas      = $request->berkas;

        $skeluar->keterangan  = $request->keterangan;


        $skeluar->save();
        
        return redirect()->route ('smsk0.index');
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
