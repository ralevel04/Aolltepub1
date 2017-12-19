<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CIN;
use App\COT;
use App\User;

use App\JADWAL;
use App\JPERSONIL;
use App\PROFIL;
use App\KANTOR;

use DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function salesmonthly(Request $request){

        $monthlysales=DB::table('tbl_invs')
        ->select(DB::raw('sum(total) as total'),DB::raw('date(created_at) as dates'))
        ->groupBy('dates')
        ->orderBy('dates','desc')
        ->get();

        return view('reports.monthlysales', compact('monthlysales'));
    }

    public function test (Request $request){
        DB::table("clicks")->select("id" ,DB::raw("(COUNT(*)) as total_click"))
        ->orderBy('created_at')
        ->groupBy(DB::raw("MONTH(created_at)"))
        ->get();
    }


    public function index()
    {

      //  $smasuk = SMasuk::where('id_atasan', '=', $id_e)->orderBy('created_at', 'desc')->get();
      //  $skluar = SKluar::where('id_atasan', '=', $id_e)->orderBy('created_at', 'desc')->get();

        $masuk  = CIN::all();
        $keluar = COT::all();
        $users  = User::all();
        $kantor = KANTOR::all();
        $jdwl  = JADWAL::all();

        $profil = PROFIL::orderBy('created_at', 'desc')->paginate(8);
        
        $smasuk = CIN::orderBy('created_at', 'desc')->paginate(5);
        $skluar = COT::orderBy('created_at', 'desc')->paginate(5);
       // $sklr= SKluar::where('id_atasan', '=', $id_e)->orderBy('created_at', 'desc')->paginate(3);


        $jml_msk = $masuk->count();
        $jml_klr = $keluar->count();
        $userss  = $users->count();
        $rapat  = $jdwl->count();
        //$jml = $jml_msk+jml_klr;

       // $uatas = UnitAtasan::where('id', '=', $id_e)->get();

        return view('dashboard', compact('kantor', 'rapat' , 'smasuk', 'skluar', 'jml_msk', 'jml_klr', 'userss', 'profil'));
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
