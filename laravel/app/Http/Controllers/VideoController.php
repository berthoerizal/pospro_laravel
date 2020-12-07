<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class VideoController extends Controller
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
        $title = "Video";
        $video = DB::table('videos')->join('users', 'videos.id_user', '=', 'users.id')->select('videos.*', 'users.name')->get();
        return view('video.index', [
            'title' => $title,
            'video' => $video
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tamba Video";
        return view('video.create', [
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
        $video = Video::create([
            'nama_video' => $request->nama_video,
            'link_video' => $request->link_video,
            'keterangan' => $request->keterangan,
            'id_user' => Auth::user()->id,
            'slug_video' => Str::slug($request->nama_video)
        ]);

        if (!$video) {
            session()->flash('error', 'Data gagal ditambah');
            return redirect(route('video.index'));
        } else {
            session()->flash('success', 'Data berhasil ditambah');
            return redirect(route('video.index'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug_video)
    {
        $title = "Detail Video";
        $video = DB::table('videos')->join('users', 'videos.id_user', '=', 'users.id')->select('videos.*', 'users.name')->where('videos.slug_video', $slug_video)->first();
        return view('video.show', [
            'title' => $title,
            'video' => $video
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug_video)
    {
        $title = "Edit Video";
        $video = Video::where('slug_video', $slug_video)->first();
        return view('video.edit', [
            'title' => $title,
            'video' => $video
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
        $video = Video::find($id);
        $video->update([
            'nama_video' => $request->nama_video,
            'link_video' => $request->link_video,
            'keterangan' => $request->keterangan,
            'id_user' => Auth::user()->id,
            'slug_video' => Str::slug($request->nama_video)
        ]);

        if (!$video) {
            session()->flash('error', 'Data gagal diedit');
            return redirect(route('video.index'));
        } else {
            session()->flash('success', 'Data berhasil diedit');
            return redirect(route('video.index'));
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
        $video = Video::find($id);
        $video->delete();

        if (!$video) {
            session()->flash('error', 'Data gagal dihapus');
            return redirect(route('video.index'));
        } else {
            session()->flash('success', 'Data berasil dihapus');
            return redirect(route('video.index'));
        }
    }
}
