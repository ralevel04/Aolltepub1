<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CIN;
use Auth;
Use Session;
use Excel;
use PDF;
use DB;


class CinController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //$smsk= CIN::all();
        $id_e = Auth::user()->id_atasan ;
        $smsk= CIN::where('id_atasan', '=', $id_e)->orderBy('created_at', 'desc')->get();
        return view ('surat.masuk.indexmasuk')->withSmsk($smsk);
    }

    public function create()
    {
        return view ('surat.masuk.createmasuk');
        
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
            'tgl_masuk'=> 'required',
            'no_surat'=> 'required',
            'tgl_surat'=> 'required',                            
            'perihal'=> 'required',
            'penerima'=> 'required',
            'posisi'=> 'required',
            'keterangan'=> 'required',
            'berkas'=> 'required'
            //'id_atasan'=> 'required'
            ]);


        $smasuk = new CIN;

        //upload file
        if ($request->hasFile('berkas')){
            $input ['berkas'] = $this->uploadFile($request);
        }

        $nama_file           = $request->file('berkas');
       // $id_e 
        $smasuk->no_agenda   = $request->no_agenda;
        $smasuk->asal_surat  = $request->asal_surat;
        $smasuk->tgl_masuk   = $request->tgl_masuk;
        $smasuk->no_surat    = $request->no_surat;
        $smasuk->tgl_surat   = $request->tgl_surat;
        $smasuk->perihal     = $request->perihal;
        $smasuk->penerima    = $request->penerima;
        $smasuk->posisi      = $request->posisi;
        $smasuk->keterangan  = $request->keterangan;
        $smasuk->id_atasan   = Auth::user()->id_atasan ;


        $nama_file1          = $request->no_agenda;
        $filename            = $nama_file1. '.' . $nama_file->getClientOriginalExtension();
        $smasuk->berkas      = $filename;


        $smasuk->save();
        
        return redirect()->route ('cin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $smasuk = CIN::findOrFail($id);
        return view ('surat.masuk.showmasuk')->withSmasuk($smasuk);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $smasuk = CIN::findOrFail($id);
        return view ('surat.masuk.edotmasuk')->withSmasuk($smasuk);
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
            'tgl_masuk'=> 'required',
            'no_surat'=> 'required',
            'tgl_surat'=> 'required',                            
            'perihal'=> 'required',
            'penerima'=> 'required',
            'posisi'=> 'required',
            'keterangan'=> 'required',
            'berkas'=> 'required'
            //'id_atasan'=> 'required'
            ]);


        $smasuk = CIN::find($id);


        //upload file
        if ($request->hasFile('berkas')){
            $input ['berkas'] = $this->uploadFile($request);
        }

        $nama_file           = $request->file('berkas');

        $smasuk->no_agenda   = $request->no_agenda;
        $smasuk->asal_surat  = $request->asal_surat;
        $smasuk->tgl_masuk   = $request->tgl_masuk;
        $smasuk->no_surat    = $request->no_surat;
        $smasuk->tgl_surat   = $request->tgl_surat;
        $smasuk->perihal     = $request->perihal;
        $smasuk->penerima    = $request->penerima;
        $smasuk->posisi      = $request->posisi;
        $smasuk->keterangan  = $request->keterangan;


        $nama_file1          = $request->no_agenda;
        $filename            = $nama_file1. '.' . $nama_file->getClientOriginalExtension();
        $smasuk->berkas      = $filename;


        $smasuk->update();
        
        return redirect()->route ('cin.index');
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
            $upload_path = '/public/berkasin';
            $request->file('berkas')->move($upload_path,$file_name);
            return $file_name;
            }
        return false;
    }

    public function destroy($id)
    {
        DB::table("c_i_ns")->delete($id);

        return redirect()->back()->with('success','Data telah dihapus');
    }


    public function deleteAll($id){
       // DB::table('srtmasuk')->where ('id_atasan', '=', $id_e)-> delete();
       // Session::flash('allert-success', 'Data Berhasil dihapus');

        return redirect()->route ('cin.index');//-> with('allert-success', 'Data Berhasil dihapus');

    }

    public function exportexcel(){
     //   $smasuk = CIN::all();
        $headerData     =  array(); 
        $headerData[]   = array('NO','NO AGENDA','TGL MASUK', 'NO SURAT', 'ASAL SURAT', 'PERIHAL', 'PENERIMA');
        $headerJudul    = array();
        $headerJudul    = array('DAFTAR SURAT MASUK');

        $id_e       = Auth::user()->id_atasan ;
        $dataExport = CIN::where('id_atasan', '=', $id_e)
                        ->select('no_agenda', 'tgl_masuk', 'no_surat', 'asal_surat', 'perihal', 'penerima')
                        ->get()->toArray();

        if(!empty($dataExport)){
          $no=1;    
          //$no_id=4;
          foreach ($dataExport as $itemData) {
              
              $headerData[] = [$no, $itemData['no_agenda'], $itemData['tgl_masuk'], $itemData['no_surat'],
                                $itemData['asal_surat'], $itemData['perihal'], $itemData['penerima']];
              $no++;
              
          }

            return Excel::create('Surat Masuk AgendOL', function($excel) use ($dataExport,$headerData, $no, $headerJudul) {
        // Set the spreadsheet title, creator, and description
                $excel->setTitle('Data Surat Masuk');
                $excel->setCreator('AgendOL')->setCompany('AOL');
                $excel->setDescription('Surat Masuk Agenda');

                
                $excel->sheet('Surat Masuk ', function($sheet) use ($headerData, $no, $headerJudul) {
                    $sheet->fromArray($headerData, null, 'A3', false, false);
                    $sheet->setOrientation('landscape');
                    $sheet->row(3, function($row) {
                        $row->setBackground('#e9e9e9'); 
                        $row->setFontWeight('bold');             
                    });

                   
                    $sheet->mergeCells('A1:G1', function(){
                        $cells->setAlignment('center');
                        $cells->row(1, function($row) { 
                            $row->setFontWeight('bold');
                        });
                    });

                    $no_id = $no+2;
                    $sheet->cells('A3:G'.$no_id, function($cells) {
                        $cells->setAlignment('center');
                    });
                    $no_id = $no+2;

                    $sheet->cells('F4:F'.$no_id, function($cells) {
                        $cells->setAlignment('left');             
                    });
                    $no_id = $no+2;
                    
                    $sheet->setBorder('A3:G'.$no_id, 'thin');          

                    $sheet->setStyle(array(
                        'font' => array(
                            'name'      =>  'Calibri',
                            'size'      =>  11
                            //'bold'      =>  true
                        )
                    ));

                    //$sheet->setFreeze('D4');
                    //autosize column
                    $sheet->setAutoSize(true);
                    
                });
           
              })->download('xlsx');

        

        } else {
            echo "Tidak ada Data Surat";
        }
        return back();

    }

    public function getPDFIn(){
      //  $smsk = CIN::all();

        $id_e   = Auth::user()->id_atasan ;
        $smsk = CIN::where('id_atasan', '=', $id_e)->orderBy('created_at', 'desc')->get();

        $pdf=PDF::loadView('pdf.pdfmasuk', ['smsk'=>$smsk])->setPaper('a4', 'landscape');   
        return $pdf ->stream ('smasuk.pdf');
    }

}
