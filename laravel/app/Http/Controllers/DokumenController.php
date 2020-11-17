<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Dokumen;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DokumenController extends Controller
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
        $dokumen = DB::table('dokumens')->join('users', 'dokumens.id_user', '=', 'users.id')->select('dokumens.*', 'users.name')->get();
        $title = "Dokumen";
        return view('dokumen.index', [
            'dokumen' => $dokumen,
            'title' => $title,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah Dokumen";
        return view('dokumen.create', [
            'title' => $title
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('gambar')) {
            $files = $request->file('gambar');
            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();
                $file->move(\base_path() . "/../assets/images", $filename);

                Dokumen::create([
                    'id_user' => Auth::user()->id,
                    'nama_dokumen' => $request->nama_dokumen,
                    'slug_dokumen' => Str::slug($request->nama_dokumen),
                    'gambar' => $filename,
                    'keterangan' => $request->keterangan
                ]);
            }

            session()->flash('success', 'Data berhasil ditambah');
            return redirect(route('dokumen.index'));
        }
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

    public function download_dokumen($id)
    {
        $dokumen = Dokumen::find($id);
        return response()->download((\base_path() . "/../assets/images/" . $dokumen->gambar));
    }
}
