<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Berita;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
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
        $berita = DB::table('beritas')->join('users', 'beritas.id_user', '=', 'users.id')->select('beritas.*', 'users.name')->get();

        $title = "Berita";
        return view('berita.index', [
            'berita' => $berita,
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
        $title = "Tambah Berita";
        return view('berita.create', [
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
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);

        $resorce  = $request->file('gambar');
        $gambar   = $resorce->getClientOriginalName();
        $resorce->move(\base_path() . "/../assets/images", $gambar);

        $berita = Berita::create([
            'judul' => $request->judul,
            'slug_judul' => Str::slug($request->judul),
            'isi' => $request->isi,
            'gambar' => $gambar,
            'id_user' => Auth::user()->id,
            'status' => $request->status
        ]);

        if (!$berita) {
            session()->flash('error', 'Data gagal ditambah');
            return redirect(route('berita.index'));
        } else {
            session()->flash('success', 'Data berhasil ditambah');
            return redirect(route('berita.index'));
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
        $title = "Detail Berita";
        $berita = DB::table('beritas')->join('users', 'beritas.id_user', '=', 'users.id')->select('beritas.*', 'users.name')->where('beritas.id', $id)->first();

        return view('berita.show', [
            'title' => $title,
            'berita' => $berita
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Edit Berita";
        $berita = Berita::find($id);
        return view('berita.edit', [
            'title' => $title,
            'berita' => $berita
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
            $gambar   = $resorce->getClientOriginalName();
            $resorce->move(\base_path() . "/../assets/images", $gambar);

            $berita = Berita::find($id);
            $old_image = \base_path() . "/../assets/images/" . $berita->gambar;
            @unlink($old_image);

            $berita->update([
                'judul' => $request->judul,
                'slug' => Str::slug($request->judul),
                'id_user' => Auth::user()->id,
                'status' => $request->status,
                'isi' => $request->isi,
                'gambar' => $gambar
            ]);

            if (!$berita) {
                session()->flash('error', 'Data gagal diubah');
                return redirect(route('berita.edit', $id));
            } else {
                session()->flash('success', 'Data berhasil diubah');
                return redirect(route('berita.index'));
            }
        } else {
            $berita = Berita::find($id);
            $berita->update([
                'judul' => $request->judul,
                'slug' => Str::slug($request->judul),
                'id_user' => Auth::user()->id,
                'status' => $request->status,
                'isi' => $request->isi,
            ]);

            if (!$berita) {
                session()->flash('error', 'Data gagal diubah');
                return redirect(route('berita.edit', $id));
            } else {
                session()->flash('success', 'Data berhasil diubah');
                return redirect(route('berita.index'));
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
        $berita = Berita::find($id);
        $old_image = \base_path() . "/../assets/images/" . $berita->gambar;
        @unlink($old_image);
        $berita->delete();
        if (!$berita) {
            session()->flash('error', 'Data gagal dihapus');
            return redirect(route('berita.index'));
        } else {
            session()->flash('success', 'Data berhasil dihapus');
            return redirect(route('berita.index'));
        }
    }
}
