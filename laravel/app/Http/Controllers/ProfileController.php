<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
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
        //
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
        if (Auth::user()->id == $id) {
            $user = User::find($id);
            $title = $user->name;
            return view('profile.edit', ['title' => $title, 'user' => $user]);
        } else {
            echo "404";
        }
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
            'email' => 'required|email|unique:users,email,' . $id,
            'name' => 'required'
        ]);

        if ($request->hasFile('gambar')) {
            $resorce  = $request->file('gambar');
            $gambar   = $resorce->getClientOriginalName();
            $resorce->move(\base_path() . "/../assets/images", $gambar);

            $user = User::find($id);
            $old_image = \base_path() . "/../assets/images/" . $user->gambar;
            @unlink($old_image);

            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'gambar' => $gambar
            ]);

            if (!$user) {
                session()->flash('error', 'Data gagal diubah');
                return redirect(route('profile.edit', $id));
            } else {
                session()->flash('success', 'Data berhasil diubah');
                return redirect(route('profile.edit', $id));
            }
        } else {
            $user = User::find($id);
            $user->update([
                'name' => $request->name,
                'email' => $request->email
            ]);

            if (!$user) {
                session()->flash('error', 'Data gagal diubah');
                return redirect(route('profile.edit', $id));
            } else {
                session()->flash('success', 'Data berhasil diubah');
                return redirect(route('profile.edit', $id));
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
}
