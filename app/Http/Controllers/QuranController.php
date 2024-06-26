<?php

namespace App\Http\Controllers;

use App\API\Quran;
use Illuminate\Http\Request;

class QuranController extends Controller
{
    public function index()
    {
        $quran = Quran::getQuran();

        return view('welcome', compact('quran'));
    }

     public function show($nomor)
    {
        $response = file_get_contents("https://quran-api.santrikoding.com/api/surah/{$nomor}");
        $surah = json_decode($response);

        // dd($surah);

        return view('detail', compact('surah'));
    }
}
