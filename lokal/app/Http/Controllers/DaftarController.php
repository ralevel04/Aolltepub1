<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Daftar;

class DaftarController extends Controller
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
        return view('auth.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();

         $this->validate($request, [
            'name' => 'required|max:255',
            'gelar' => 'required|max:255',
            'nip' => 'required|max:255',
            'pangkat' => 'required|max:255',
            'jabatan' => 'required|max:255',
            'foto' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'id_atasan' => 'required|max:255',
            'role' => 'required|max:255',
            'password' => 'required|min:6|confirmed',
        ]);

        $daftar = new Daftar;

        /*upload foto
        if ($request->hasFile('foto')){
            $input ['foto'] = $this->uploadFoto($request);
        }
*/

        $nama_file           = $request->file('foto');


        $smasuk->name   = $request->name;
        $smasuk->email  = $request->email;
        $smasuk->nip  = $request->nip;
        $smasuk->pangkat  = $request->pangkat;
        $smasuk->jabatan  = $request->jabatan;
        $smasuk->gelar  = $request->gelar;
        $smasuk->id_atasan  = $request->id_atasan;
        $smasuk->foto  = $request->foto;
        $smasuk->role  = $request->role;
        $smasuk->password  = bcrypt($request->password);

     //   $filename            = $name. '.' . $nama_file->getClientOriginalExtension();
     //   $smasuk->foto      = $filename;
     

    $smasuk->update();
        
        return redirect()->route ('cin.index');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create()
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



    private function uploadFoto(Request $request){
        $nama_file=$request->file('foto');
        $nama_file1=$request->input('name');
        
        $ext = $nama_file->getClientOriginalExtension();
        

        if ($request->file('foto')->isValid()) {
            $file_name   = $nama_file1. '.' . $nama_file->getClientOriginalExtension();
            $upload_path = 'foto';
            $request->file('foto')->move($upload_path,$file_name);
            return $file_name;
            }
        return false;
    }
}
