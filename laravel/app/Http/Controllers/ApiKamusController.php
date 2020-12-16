<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kamus;
use Validator;

class ApiKamusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamus = Kamus::all();
        return response()->json([
            'success' => true,
            'message' => 'Get method success',
            'data' => $kamus
        ], 200);
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
        $rules = array(
            'kata' => "required|unique:kamuses,kata",
            'arti' => "required",
            'contoh' => "required"
        );
        $valid = Validator::make($request->all(), $rules);
        if ($valid->fails()) {
            return response()->json([
                'success' => false,
                'message' => $valid->errors(),
                'data' => null
            ], 400);
        } else {
            $kamus = Kamus::create([
                'kata' => $request->json()->get('kata'),
                'arti' => $request->json()->get('arti'),
                'contoh' => $request->json()->get('contoh')
            ]);

            if (!$kamus) {
                return response()->json([
                    'success' => false,
                    'message' => 'POST method fail',
                    'data' => NULL
                ], 400);
            } else {
                return response()->json([
                    'success' => true,
                    'message' => 'POST method success',
                    'data' => $kamus
                ], 200);
            }
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
        $kamus = Kamus::find($id);
        if (!$kamus) {
            return response()->json([
                'success' => false,
                'message' => 'GET method fail',
                'data' => NULL
            ], 400);
        } else {
            return response()->json([
                'success' => true,
                'message' => 'GET method success',
                'data' => $kamus
            ], 200);
        }
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
        $rules = array(
            'kata' => 'required',
            'arti' => 'required',
            'contoh' => 'required'
        );
        $valid = Validator::make($request->all(), $rules);
        if ($valid->fails()) {
            return response()->json([
                'success' => false,
                'message' => $valid->errors(),
                'data' => null
            ]);
        } else {
            $kamus = Kamus::find($id);
            $kamus->update([
                'kata' => $request->json()->get('kata'),
                'arti' => $request->json()->get('arti'),
                'contoh' => $request->json()->get('contoh')
            ]);

            if (!$kamus) {
                return response()->json([
                    'success' => false,
                    'message' => 'PUT method fail',
                    'data' => NULL
                ], 400);
            } else {
                return response()->json([
                    'success' => true,
                    'message' => 'PUT method success',
                    'data' => $kamus
                ], 200);
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
        $kamus = Kamus::find($id);
        $kamus->delete();

        if (!$kamus) {
            return response()->json([
                'success' => false,
                'message' => 'DELETE method fail',
                'data' => NULL
            ], 400);
        } else {
            return response()->json([
                'success' => true,
                'message' => 'DELETE method success',
                'data' => $kamus
            ], 200);
        }
    }
}
