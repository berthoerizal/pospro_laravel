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
        $berita = Berita::paginate(3);
        $title = "Berita";
        return view('berita.index', compact('berita'));
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        if ($cari == "") {
            $berita = Berita::paginate(3);
        } else {
            $berita = DB::table('beritas')
                ->where('judul', $cari)
                ->paginate(3);
        }

        // mengirim data pegawai ke view index
        return view('berita.index', compact('berita'));
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
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
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
        } else {
            $berita = Berita::create([
                'judul' => $request->judul,
                'slug_judul' => Str::slug($request->judul),
                'isi' => $request->isi,
                'gambar' => 'default-image.jpg',
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug_judul)
    {
        $title = "Detail Berita";
        $berita = DB::table('beritas')->join('users', 'beritas.id_user', '=', 'users.id')->select('beritas.*', 'users.name')->where('beritas.slug_judul', $slug_judul)->first();

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
    public function edit($slug_judul)
    {
        $title = "Edit Berita";
        $berita = Berita::where('slug_judul', $slug_judul)->first();
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
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $resorce  = $request->file('gambar');
            $gambar   = $resorce->getClientOriginalName();
            $resorce->move(\base_path() . "/../assets/images", $gambar);

            $berita = Berita::find($id);
            if ($berita->gambar != 'default-image.jpg') {
                $old_image = \base_path() . "/../assets/images/" . $berita->gambar;
                @unlink($old_image);
            }

            $berita->update([
                'judul' => $request->judul,
                'slug_judul' => Str::slug($request->judul),
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
                'slug_judul' => Str::slug($request->judul),
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
        if ($berita->gambar != 'default-image.jpg') {
            $old_image = \base_path() . "/../assets/images/" . $berita->gambar;
            @unlink($old_image);
        }

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
