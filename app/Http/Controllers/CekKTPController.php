<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class CekKTPController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $data = NULL;
        $title = "CEK KTP";
        return view('cekktp.index', ['title' => $title, 'data' => $data]);
    }

    public function store(Request $request)
    {
        $title = "CEK KTP";
        $client = new Client();

        $api_key = '95c2f46d20eb3e970f6224e243ebc2f77e2228e3caa54f8d9c22d135a0740c5c';
        $response = $client->request('POST', 'https://api.binderbyte.com/v1/validation/ktp?api_key=' . $api_key, [
            'form_params' => [
                'nik' => $request->nik,
                'name' => $request->name,
                'birthplace' => $request->birthplace,
                'birthdate' => $request->birthdate
            ]
        ]);

        $data = json_decode($response->getBody(), true);
        return view('cekktp.index', ['title' => $title, 'data' => $data]);
    }
}
