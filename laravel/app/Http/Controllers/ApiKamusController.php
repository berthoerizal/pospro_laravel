<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kamus;
use Validator;
use Illuminate\Support\Facades\DB;

class ApiKamusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $kamus = Kamus::all();
         return response()->json($kamus);
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
        $api_token = $request->input('api_token');
        $check_token = DB::table('tokens')->where('api_token', $api_token)->first();

        if (!$check_token) {
            return response()->json([
                'success' => false,
                'message' => 'API Token is not found',
                'data' => NULL
            ], 404);
        } else {
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $api_token = $request->input('api_token');
        $check_token = DB::table('tokens')->where('api_token', $api_token)->first();

        if (!$check_token) {
            return response()->json([
                'success' => false,
                'message' => 'API Token is not found',
                'data' => NULL
            ], 404);
        } else {
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
        $api_token = $request->input('api_token');
        $check_token = DB::table('tokens')->where('api_token', $api_token)->first();

        if (!$check_token) {
            return response()->json([
                'success' => false,
                'message' => 'API Token is not found',
                'data' => NULL
            ], 404);
        } else {
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $api_token = $request->input('api_token');
        $check_token = DB::table('tokens')->where('api_token', $api_token)->first();

        if (!$check_token) {
            return response()->json([
                'success' => false,
                'message' => 'API Token is not found',
                'data' => NULL
            ], 404);
        } else {
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
}
