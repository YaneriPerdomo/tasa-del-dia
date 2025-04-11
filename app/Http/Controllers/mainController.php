<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    public function index()
    {
        $url = 'https://pydolarve.org/api/v1/dollar?page=alcambio';
        $response = file_get_contents($url);
        $data = json_decode($response, true);
        return view('main', ['data' => $data]);
    }
}
