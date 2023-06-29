<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlphabetController extends Controller
{
    public function index()
    {
        return view('alphabet.index');
    }

    public function processWord(Request $request)
    {
        $word = strtolower($request->input('word'));

        $alphabet = range('a', 'z');

        return view('alphabet.result', compact('word', 'alphabet'));
    }
}