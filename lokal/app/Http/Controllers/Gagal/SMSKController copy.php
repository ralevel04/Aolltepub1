<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\keluar;
use Excel;

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
        return view ('test.keluar.indexkeluar')->withSmsk($smsk);
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

        //upload file
        if ($request->hasFile('berkas')){
            $input ['berkas'] = $this->uploadFile($request);
        }

        $nama_file           = $request->file('berkas');

        $skeluar->no_agenda   = $request->no_agenda;
        $skeluar->asal_surat  = $request->asal_surat;
        $skeluar->tgl_keluar   = $request->tgl_keluar;
        $skeluar->no_surat    = $request->no_surat;
        $skeluar->tgl_surat   = $request->tgl_surat;
        $skeluar->perihal     = $request->perihal;
        $skeluar->penerima    = $request->penerima;
        $skeluar->posisi      = $request->posisi;
        $skeluar->keterangan  = $request->keterangan;


        $nama_file1          = $request->no_agenda;
        $filename            = $nama_file1. '.' . $nama_file->getClientOriginalExtension();
        $skeluar->berkas      = $filename;


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
        $skeluar = keluar::findOrFail($id);
        return view ('test.keluar.showkeluar')->withSkeluar($skeluar);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skeluar = keluar::findOrFail($id);
        return view ('test.keluar.editkeluar')->withSkeluar($skeluar);
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


        $skeluar = keluar::find($id);


        //upload file
        if ($request->hasFile('berkas')){
            $input ['berkas'] = $this->uploadFile($request);
        }

        $nama_file           = $request->file('berkas');

        $skeluar->no_agenda   = $request->no_agenda;
        $skeluar->asal_surat  = $request->asal_surat;
        $skeluar->tgl_keluar   = $request->tgl_keluar;
        $skeluar->no_surat    = $request->no_surat;
        $skeluar->tgl_surat   = $request->tgl_surat;
        $skeluar->perihal     = $request->perihal;
        $skeluar->penerima    = $request->penerima;
        $skeluar->posisi      = $request->posisi;
        $skeluar->keterangan  = $request->keterangan;


        $nama_file1          = $request->no_agenda;
        $filename            = $nama_file1. '.' . $nama_file->getClientOriginalExtension();
        $skeluar->berkas      = $filename;


        $skeluar->update();
        
        return redirect()->route ('smsk0.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function uploadFile(Request $request){
        $nama_file=$request->file('berkas');
        $nama_file1=$request->input('no_agenda');
        
        $ext = $nama_file->getClientOriginalExtension();
        

        if ($request->file('berkas')->isValid()) {
            $file_name   = $nama_file1. '.' . $nama_file->getClientOriginalExtension();
            $upload_path = 'berkasin';
            $request->file('berkas')->move($upload_path,$file_name);
            return $file_name;
            }
        return false;
    }

    public function destroy($id)
    {
        $skeluar = keluar::findOrFail($id);
        $skeluar->delete();
        Session::flash('allert-success', 'Data Berhasil dihapus');

        return redirect()->route ('smsk0.index');//-> with('allert-success', 'Data Berhasil dihapus');
    }


    public function deletem($id){
        $skeluar = keluar::findOrFail($id);
        $skeluar->delete();
        Session::flash('allert-success', 'Data Berhasil dihapus');

        return redirect()->route ('smsk0.index');//-> with('allert-success', 'Data Berhasil dihapus');

    }

    

}
