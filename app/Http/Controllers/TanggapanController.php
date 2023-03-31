<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tanggapan;
use App\Pengaduan;
use Illuminate\Support\Facades\DB;

class TanggapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pengaduan = Pengaduan::all();
        // $tanggapan = Tanggapan::all();
        $tanggapan =  DB::table('tanggapans as a')
            ->join('pengaduans as b', 'a.id_pengaduan', '=', 'b.id_pengaduan')
            ->select('b.isi_laporan', 'b.status', 'a.id_tanggapan', 'a.tgl_tanggapan', 'a.tanggapan', 'a.nik')
            ->get();

        return view('tanggapan.index', compact('tanggapan','pengaduan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pengaduan = Pengaduan::all();
        return view('tanggapan.create', compact('pengaduan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'id_pengaduan' => 'required',
            'tgl_tanggapan' => 'required',
            'tanggapan' => 'required',
            'nik' => 'required',
            // 'isi_laporan' => 'required',
            // 'foto' => 'required',
            // 'status'=> 'required'
        ]);

        $pengaduan = Pengaduan::find($request->id_pengaduan);
          $pengaduan->status = $request->status;
          $pengaduan->save();
 
        Tanggapan::create([
            'id_pengaduan' => $request->id_pengaduan,
            'tgl_tanggapan' => $request->tgl_tanggapan,
            'tanggapan' => $request->tanggapan,
            'nik' => $request->nik,
            // 'isi_laporan' => $request->isi_laporan,
            // 'foto' => $request->foto,
            // 'status' => $request->status
        ]);
 
        return redirect('/tanggapan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function createOrUpdate(Request $request)
    // {
    //     $tanggapan = Tanggapan::where('$id_pengaduan',$request->id_pengaduan);
    //     $pengaduan = Pengaduan::where('$id_pengaduan',$request->id_pengaduan);
    //     if($tanggapan){
    //         $pengaduan->update(['status'=>$request->status]);

    //         $tanggapan->update([
    //             'tgl_tanggapan'=>date('Y-m-d'),
    //             'tanggapan'=>$request->tanggapan,
    //         ]);
    //         return redirect()->route('pengaduan.show',['pengaduan'=>$pengaduan, 'tanggapan'=>$tanggapan]);        }else{
    //         $pengaduan->update(['status'=>$request->status]);
    //         $tanggapan= Tanggapan::create([
    //             'tgl_tanggapan'=>date('Y-m-d'),
    //             'tanggapan'=>$request->tanggapan,
    //         ]);
    //     }
    //     return redirect()->route('pengaduan.show',['pengaduan'=>$pengaduan, 'tanggapan'=>$tanggapan])->with(['status'=>'Berhasil dikirim']);
    // }

    public function show($id)
    {
        $tanggapan = tanggapan::find($id);
        return view('tanggapan.show')->with('tanggapan', $tanggapan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tanggapan = Tanggapan::find($id);
        return view('tanggapan.edit',compact('tanggapan')); 
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
        $this->validate($request,[
            'tgl_tanggapan' => 'required',
            'tanggapan' => 'required',
            'nik' => 'required|max:17'
         ]);
      
         $pengaduan = Pengaduan::find($request->id_pengaduan);
         $pengaduan->status = $request->status;
         $pengaduan->save();

         $tanggapan = Tanggapan::find($id);
         $tanggapan->tgl_tanggapan = $request->tgl_tanggapan;
         $tanggapan->tanggapan = $request->tanggapan;
         $tanggapan->nik = $request->nik;
         $tanggapan->save();

         return redirect('/tanggapan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $tanggapan = Tanggapan::find($id);
        // $tanggapan->delete();

        // return redirect('/tanggapan');

        pengaduan::where('id_pengaduan',$id)->delete();
        return redirect('/pengaduan')->with('success', 'Data Berhasil Dihapus');;
    }
}

