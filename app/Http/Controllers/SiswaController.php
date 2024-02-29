<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiswaController extends Controller
{

    public function index()
    {
        return view('siswa/index',[
           'title' => 'siswa',
            'siswa' => Siswa::all()
        ]);
    }

    public function show($siswa)
    {
        $siswamodels = Siswa::findOrFail($siswa);

        if (!$siswamodels) {
            return abort(404);
        }

        return view('siswa.detail', [
            "title" => "DetailSiswa",
            "siswa" => $siswamodels,
        ]);
    }



}
