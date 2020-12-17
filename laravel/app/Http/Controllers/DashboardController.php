<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $title = 'Dashboard';
        $client = new Client();

        $response = $client->request('POST', 'https://api.binderbyte.com/v1/validation/ktp?api_key=c53c604b69f29678823081c30670eafe18bc9f7f8b6d17a1c89a9cc6a4a85d92', [
            'form_params' => [
                'nik' => '1404112110970003',
                'name' => 'Bertho Erizal',
            ]
        ]);

        $data = json_decode($response->getBody(), true);
        return view('dashboard', ['title' => $title, 'data' => $data]);
        // return view('dashboard', ['title' => $title]);
    }
}
