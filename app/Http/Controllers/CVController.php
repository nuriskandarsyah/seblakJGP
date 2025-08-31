<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CVController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Dashboard',
        ];
        return view('cv.index', compact('data'));
    }
    
    public function cs()
    {
        $data = [
            'name' => 'Cybersecurity',
        ];
        return view('cv.cs', compact('data'));
    }
    
    public function seblak()
    {
        $data = [
            'name' => 'Seblak',
        ];
        return view('cv.seblak', compact('data'));
    }
}
