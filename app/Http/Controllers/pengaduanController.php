<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pengaduan;
use App\Tanggapan;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a = Pengaduan::all();
        
        if (auth()->user()->level == 'user') {
            $pengaduan = $a->where('nik', auth()->user()->nik)->all();
        }else{
            $pengaduan = $a;
            
        }
        
    	return view('pengaduan.index', compact('pengaduan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pengaduan = Pengaduan::all();
        return view('pengaduan.create', compact('pengaduan'));
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
    		'tgl_pengaduan' => 'required',
            'nik' => 'required',
            'isi_laporan' => 'required',
            'foto' => 'required'
    	]);

        $imgName = $request->foto->getClientOriginalName() . '-' . time() . '.' . $request->foto->extension();
        $request->foto->move(public_path('image'), $imgName);
 
        pengaduan::create([
    		'tgl_pengaduan' => $request->tgl_pengaduan,
            'nik' => $request->nik,
            'isi_laporan' => $request->isi_laporan,
            'foto' => $imgName,
            'status' => $request->status,
    	]);
 
    	return redirect('/pengaduan')->with('success', 'Data Berhasil Ditambah');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengaduan = Pengaduan::find($id);
        $tanggapan = Tanggapan::where('id_pengaduan', $id)->first();
        return view('pengaduan.show', compact('pengaduan', 'tanggapan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $pengaduan = Pengaduan::where('id_pengaduan',$id)->first();
         return view('pengaduan.edit', compact('pengaduan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_pengaduan)
    {
         $this->validate($request,[
            'status' => 'required'
          ]);
      
          $pengaduan = Pengaduan::find($id_pengaduan);
          $pengaduan->status = $request->status;
          $pengaduan->save();

          return redirect('/pengaduan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        pengaduan::where('id_pengaduan',$id)->delete();
        return redirect('/pengaduan')->with('success', 'Data Berhasil Dihapus');;
    } 
    // public function cetakform(){
    //     return view('pengaduan.cetak');
    // }

    // public function cetak_pdf($id){
    //     // dd(["Tanggal awal: ".$tglawal, "Tanggal akhir: ".$tglakhir]);
    //     $pengaduan= Pengaduan::find($id);
    //     return view('pengaduan.cetak', compact('pengaduan'));
    // }
    public function cetak_pdf($id)
    {
        $pengaduan = Pengaduan::find($id);
        return view('pengaduan.cetak', compact('pengaduan'));
    }
}