<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\COT;
use Auth;
Use Session;
use Excel;
use PDF;

class CoutController extends Controller
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
        //$sklr= COT::all();
        $id_e = Auth::user()->id_atasan ;
        $sklr= COT::where('id_atasan', '=', $id_e)->orderBy('created_at', 'desc')->get();
        return view ('surat.keluar.indexkeluar')->withSklr($sklr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('surat.keluar.createkeluar');
        
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
            'tujuan_surat'=> 'required',
            'tgl_keluar'=> 'required',
            'no_surat'=> 'required',
            'tgl_surat'=> 'required',                            
            'perihal'=> 'required',
            'pembuat'=> 'required',
            'posisi'=> 'required',
            'keterangan'=> 'required',
            'berkas'=> 'required'
            //'id_atasan'=> 'required'
            ]);


        $skeluar = new COT;

        //upload file
        if ($request->hasFile('berkas')){
            $input ['berkas'] = $this->uploadFile($request);
        }

        $nama_file              = $request->file('berkas');
        $skeluar->no_agenda     = $request->no_agenda;
        $skeluar->tujuan_surat  = $request->tujuan_surat;
        $skeluar->tgl_keluar    = $request->tgl_keluar;
        $skeluar->no_surat      = $request->no_surat;
        $skeluar->tgl_surat     = $request->tgl_surat;
        $skeluar->perihal       = $request->perihal;
        $skeluar->pembuat       = $request->pembuat;
        $skeluar->posisi        = $request->posisi;
        $skeluar->keterangan    = $request->keterangan;
        $skeluar->id_atasan     = Auth::user()->id_atasan ;             
        


        $nama_file1             = $request->no_agenda;
        $filename               = $nama_file1. '.' . $nama_file->getClientOriginalExtension();
        $skeluar->berkas        = $filename;


        $skeluar->save();
        
        return redirect()->route('cout.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $skeluar = COT::findOrFail($id);
        return view ('surat.keluar.showkeluar')->withSkeluar($skeluar);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skeluar = COT::findOrFail($id);
        return view ('surat.keluar.edotkeluar')->withSkeluar($skeluar);
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
            'tujuan_surat'=> 'required',
            'tgl_keluar'=> 'required',
            'no_surat'=> 'required',
            'tgl_surat'=> 'required',                            
            'perihal'=> 'required',
            'pembuat'=> 'required',
            'posisi'=> 'required',
            'keterangan'=> 'required',
            'berkas'=> 'required'
            //'id_atasan'=> 'required'
            ]);


        $skeluar = COT::find($id);


        //upload file
        if ($request->hasFile('berkas')){
            $input ['berkas'] = $this->uploadFile($request);
        }

        $nama_file           = $request->file('berkas');

        $skeluar->no_agenda   = $request->no_agenda;
        $skeluar->tujuan_surat  = $request->tujuan_surat;
        $skeluar->tgl_keluar  = $request->tgl_keluar;
        $skeluar->no_surat    = $request->no_surat;
        $skeluar->tgl_surat   = $request->tgl_surat;
        $skeluar->perihal     = $request->perihal;
        $skeluar->pembuat    = $request->pembuat;
        $skeluar->posisi      = $request->posisi;
        $skeluar->keterangan  = $request->keterangan;
       // $skeluar->berkas  = $request->berkas;
        $skeluar->id_atasan     = Auth::user()->id_atasan ;             


        $nama_file1          = $request->no_agenda;
        $filename            = $nama_file1. '.' . $nama_file->getClientOriginalExtension();
        $skeluar->berkas      = $filename;


        $skeluar->update();
        
        return redirect()->route ('cout.index');
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
            $upload_path = 'public/berkasout';
            $request->file('berkas')->move($upload_path,$file_name);
            return $file_name;
            }
        return false;
    }

    public function destroy($id)
    {
        $skeluar = keluar::findOrFail($id);
        $skeluar->delete();
       
        return redirect()->route ('cout.index');//-> with('allert-success', 'Data Berhasil dihapus');
    }


    public function deleteAll($id){
       DB::table("c_o_ts")->delete($id);

        return redirect()->back()->with('success','Data telah dihapus');

    }

    public function exportexcelout(){
        //   $smasuk = CIN::all();
        $headerData     =  array(); 
        $headerData[]   = array('NO','NO AGENDA','TGL KELUAR', 'NO SURAT', 'TUJUAN SURAT', 'PERIHAL', 'PENERIMA');
        $headerJudul    = array();
        $headerJudul    = array('DAFTAR SURAT KELUAR');

        $id_e       = Auth::user()->id_atasan ;
        $dataExport = COT::where('id_atasan', '=', $id_e)
                        ->select('no_agenda', 'tgl_keluar', 'no_surat', 'tujuan_surat', 'perihal', 'pembuat')
                        ->get()->toArray();

        if(!empty($dataExport)){
          $no=1;    
          //$no_id=4;
          foreach ($dataExport as $itemData) {
              
              $headerData[] = [$no, $itemData['no_agenda'], $itemData['tgl_keluar'], $itemData['no_surat'],
                                $itemData['tujuan_surat'], $itemData['perihal'], $itemData['pembuat']];
              $no++;
              
          }

            return Excel::create('Surat Keluar AgendOL', function($excel) use ($dataExport,$headerData, $no, $headerJudul) {
        // Set the spreadsheet title, creator, and description
                $excel->setTitle('Data Surat Keluar');
                $excel->setCreator('AgendOL')->setCompany('AOL');
                $excel->setDescription('Surat Keluar Agenda');

                
                $excel->sheet('Surat Keluar ', function($sheet) use ($headerData, $no, $headerJudul) {
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

    public function getPDFout(){
        $id_e   = Auth::user()->id_atasan ;
        $sklr = COT::where('id_atasan', '=', $id_e)->orderBy('no_agenda', 'desc')->get();

        $pdf=PDF::loadView('pdf.pdfkeluar', ['sklr'=>$sklr])->setPaper('a4', 'landscape');   
        return $pdf ->stream ('skeluar.pdf');
    }

}
