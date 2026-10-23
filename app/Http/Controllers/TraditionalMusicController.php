<?php

namespace App\Http\Controllers;

use App\Models\TraditionalMusic;
use Illuminate\Http\Request;

class TraditionalMusicController extends Controller
{
    public function index()
    {
        $musics = TraditionalMusic::all();
        return view('music.index', compact('musics'));
    }

    public function show($id)
    {
        $music = TraditionalMusic::findOrFail($id);
        return view('music.show', compact('music'));
    }
}
