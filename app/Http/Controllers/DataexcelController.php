<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Dataexcel;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DataexcelExport;
use App\Imports\DataexcelImport;

class DataexcelController extends Controller
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
        $title = "Data Excel";
        $dataexcel = Dataexcel::all();
        return view('dataexcel.index', [
            'title' => $title,
            'dataexcel' => $dataexcel
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
            'username' => 'required',
            'nama' => 'required',
            'nomor_tps' => 'required'
        ]);

        $dataexcel = Dataexcel::all();
        foreach ($dataexcel as $dataexcel) {
            if ($dataexcel->username == $request->username) {
                session()->flash('error', 'Data gagal ditambah, Username ' . $request->username . ' sudah digunakan');
                return redirect(route('dataexcel.index'));
            }
        }

        $data = Dataexcel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'nomor_tps' => $request->nomor_tps
        ]);

        if (!$data) {
            session()->flash('error', 'Data gagal ditambah');
            return redirect(route('dataexcel.index'));
        } else {
            session()->flash('success', 'Data berhasil ditambah');
            return redirect(route('dataexcel.index'));
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
        $dataexcel = Dataexcel::find($id);
        $dataexcel->update([
            'username' => $request->username,
            'nama' => $request->nama,
            'nomor_tps' => $request->nomor_tps
        ]);

        if (!$dataexcel) {
            session()->flash('error', 'Data gagal diedit');
            return redirect(route('dataexcel.index'));
        } else {
            session()->flash('success', 'Data berhasil diedit');
            return redirect(route('dataexcel.index'));
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
        $dataexcel = Dataexcel::find($id);
        $dataexcel->delete();

        if (!$dataexcel) {
            session()->flash('error', 'Data gagal dihapus');
            return redirect(route('dataexcel.index'));
        } else {
            session()->flash('success', 'Data berhasil dihapus');
            return redirect(route('dataexcel.index'));
        }
    }

    public function export()
    {
        return Excel::download(new DataexcelExport, 'Dataexcels.xlsx');
    }

    public function import(Request $request)
    {
        // validasi
        $request->validate([
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        // menangkap file excel
        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = rand() . $file->getClientOriginalName();

        // upload ke folder file_siswa di dalam folder public
        $file->move(\base_path() . "/../assets/excel", $nama_file);

        // import data
        Excel::import(new DataexcelImport, (\base_path() . "/../assets/excel/" . $nama_file));

        // notifikasi dengan session
        session()->flash('success', 'Data berhasil di-import');

        // alihkan halaman kembali
        return redirect(route('dataexcel.index'));
    }

    public function delete_all()
    {
        $dataexcel = Dataexcel::truncate();

        if (!$dataexcel) {
            session()->flash('error', 'Data gagal dihapus');
            return redirect(route('dataexcel.index'));
        } else {
            session()->flash('success', 'Data berhasil dihapus');
            return redirect(route('dataexcel.index'));
        }
    }
}
