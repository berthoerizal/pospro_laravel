<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sertifikat;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use PDF;

class SertifikatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sertifikat = DB::table('sertifikats')->first();
        $title = "Sertifikat";
        return view('sertifikat.index', [
            'title' => $title,
            'sertifikat' => $sertifikat
        ]);
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
        $request->validate([
            'kegiatan' => 'required',
            'instansi' => 'required',
            'nomor' => 'required',
            'peserta' => 'required',
            'keterangan' => 'required',
            'tempat' => 'required',
            'tanggal' => 'required',
            'panitia1' => 'required',
            'jabatan1' => 'required',
            'panitia2' => 'required',
            'jabatan2' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $resorce  = $request->file('gambar');
            $gambar   = $resorce->getClientOriginalName();
            $resorce->move(\base_path() . "/../assets/images", $gambar);

            $sertifikat = Sertifikat::find($id);
            $old_image = \base_path() . "/../assets/images/" . $sertifikat->gambar;
            @unlink($old_image);

            $sertifikat->update([
                'kegiatan' => $request->kegiatan,
                'instansi' => $request->instansi,
                'nomor' => $request->nomor,
                'peserta' => $request->peserta,
                'keterangan' => $request->keterangan,
                'tempat' => $request->tempat,
                'tanggal' => $request->tanggal,
                'panitia1' => $request->panitia1,
                'kegiatan1' => $request->kegiatan1,
                'panitia2' => $request->panitia2,
                'kegiatan2' => $request->kegiatan2,
                'gambar' => $gambar
            ]);

            if (!$sertifikat) {
                session()->flash('error', 'Data gagal diubah');
                return redirect(route('sertifikat.index'));
            } else {
                session()->flash('success', 'Data berhasil diubah');
                return redirect(route('sertifikat.index'));
            }
        } else {
            $sertifikat = Sertifikat::find($id);
            $sertifikat->update([
                'kegiatan' => $request->kegiatan,
                'instansi' => $request->instansi,
                'nomor' => $request->nomor,
                'peserta' => $request->peserta,
                'keterangan' => $request->keterangan,
                'tempat' => $request->tempat,
                'tanggal' => $request->tanggal,
                'panitia1' => $request->panitia1,
                'kegiatan1' => $request->kegiatan1,
                'panitia2' => $request->panitia2,
                'kegiatan2' => $request->kegiatan2
            ]);

            if (!$sertifikat) {
                session()->flash('error', 'Data gagal diubah');
                return redirect(route('sertifikat.index'));
            } else {
                session()->flash('success', 'Data berhasil diubah');
                return redirect(route('sertifikat.index'));
            }
        }
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

    public function pdf_sertifikat($id)
    {
        $sertifikat = Sertifikat::find($id);
        // return view('sertifikat.show')
        //     ->with('sertifikat', $sertifikat);
        $pdf = PDF::loadView('sertifikat.pdf_sertifikat', ['sertifikat' =>  $sertifikat])->setPaper('a4', 'landscape');
        return $pdf->download('sertifikat.pdf');
    }
}
