<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Kamus;

class KamusController extends Controller
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
        $title = "Kamus";
        $kamus = Kamus::all();
        return view('kamus.index', [
            'title' => $title,
            'kamus' => $kamus
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
        $request->validate([
            'kata' => 'required',
            'arti' => 'required',
            'contoh' => 'required'
        ]);

        $kamus = Kamus::all();
        foreach ($kamus as $kamus) {
            if ($kamus->kata == $request->kata) {
                session()->flash('error', 'Data gagal ditambah, kata/kalimat ' . $request->kata . ' sudah digunakan');
                return redirect(route('kamus.index'));
            }
        }

        $kamus = Kamus::create([
            'kata' => $request->kata,
            'arti' => $request->arti,
            'contoh' => $request->contoh
        ]);

        if (!$kamus) {
            session()->flash('error', 'Data gagal ditambah');
            return redirect(route('kamus.index'));
        } else {
            session()->flash('success', 'Data berhasil ditambah');
            return redirect(route('kamus.index'));
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
        $request->validate([
            'kata' => 'required|unique:kamuses,kata,' . $id,
            'arti' => 'required',
            'contoh' => 'required'
        ]);

        $kamus = Kamus::find($id);
        $kamus->update([
            'kata' => $request->kata,
            'arti' => $request->arti,
            'contoh' => $request->contoh
        ]);

        if (!$kamus) {
            session()->flash('error', 'Data gagal diedit');
            return redirect(route('kamus.index'));
        } else {
            session()->flash('success', 'Data berhasil diedit');
            return redirect(route('kamus.index'));
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
        $kamus = Kamus::find($id);
        $kamus->delete();

        if (!$kamus) {
            session()->flash('error', 'Data gagal dihapus');
            return redirect(route('kamus.index'));
        } else {
            session()->flash('success', 'Data berhasil dihapus');
            return redirect(route('kamus.index'));
        }
    }
}
