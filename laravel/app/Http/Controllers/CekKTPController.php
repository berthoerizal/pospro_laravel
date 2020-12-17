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

        $api_key = 'c53c604b69f29678823081c30670eafe18bc9f7f8b6d17a1c89a9cc6a4a85d92';
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

    public function perrecobaan(Request $request)
    {
        $client = new Client();

        $api_key = 'c53c604b69f29678823081c30670eafe18bc9f7f8b6d17a1c89a9cc6a4a85d92';
        $response = $client->request('POST', 'https://api.binderbyte.com/v1/validation/ktp?api_key=' . $api_key, [
            'form_params' => [
                'nik' => $request->nik,
                'name' => $request->name,
                'birthplace' => $request->birthplace,
                'birthdate' => $request->birthdate
            ]
        ]);

        return response()->json($response);

        //jika ingin ditampilkan ke view pada halaman yang berbea:        
        // $data = json_decode($response->getBody(), true);
        // return view('dashboard', ['data' => $data]);
        //kemudian pada file view panggil data dengan cara {{$data['nik']}}
    }
}
