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
                $x = 1;
                $filename = time() . '-' . $file->getClientOriginalName();
                $file->move(\base_path() . "/../assets/images", $filename);

                $slug_dokumen = Str::slug($request->nama_dokumen);
                Dokumen::create([
                    'id_user' => Auth::user()->id,
                    'nama_dokumen' => $request->nama_dokumen,
                    'slug_dokumen' => $slug_dokumen,
                    'gambar' => $filename
                ]);
                $x++;
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
    public function edit($slug_dokumen)
    {
        $title = "Edit Dokumen";
        $dokumen = Dokumen::where('slug_dokumen', $slug_dokumen)->first();
        return view('dokumen.edit', [
            'title' => $title,
            'dokumen' => $dokumen
        ]);
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
        if ($request->hasFile('gambar')) {
            $resorce  = $request->file('gambar');
            $gambar   = $resorce->getClientOriginalName() . '-' . time();
            $resorce->move(\base_path() . "/../assets/images", $gambar);

            $dokumen = Dokumen::find($id);
            $old_image = \base_path() . "/../assets/images/" . $dokumen->gambar;
            @unlink($old_image);

            $slug_dokumen = Str::slug($request->nama_dokumen);
            $dokumen->update([
                'nama_dokumen' => $request->nama_dokumen,
                'slug_dokumen' => $slug_dokumen,
                'id_user' => Auth::user()->id,
                'gambar' => $gambar
            ]);

            if (!$dokumen) {
                session()->flash('error', 'Data gagal diubah');
                return redirect(route('dokumen.index'));
            } else {
                session()->flash('success', 'Data berhasil diubah');
                return redirect(route('dokumen.index'));
            }
        } else {
            $dokumen = Dokumen::find($id);
            $slug_dokumen = Str::slug($request->nama_dokumen);
            $dokumen->update([
                'nama_dokumen' => $request->nama_dokumen,
                'slug_dokumen' => $slug_dokumen,
                'id_user' => Auth::user()->id,
            ]);

            if (!$dokumen) {
                session()->flash('error', 'Data gagal diubah');
                return redirect(route('dokumen.index'));
            } else {
                session()->flash('success', 'Data berhasil diubah');
                return redirect(route('dokumen.index'));
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
        $dokumen = Dokumen::find($id);
        $old_image = \base_path() . "/../assets/images/" . $dokumen->gambar;
        @unlink($old_image);
        $dokumen->delete();
        if (!$dokumen) {
            session()->flash('error', 'Data gagal dihapus');
            return redirect(route('dokumen.index'));
        } else {
            session()->flash('success', 'Data berhasil dihapus');
            return redirect(route('dokumen.index'));
        }
    }

    public function download_dokumen($id)
    {
        $dokumen = Dokumen::find($id);
        return response()->download((\base_path() . "/../assets/images/" . $dokumen->gambar));
    }
}
