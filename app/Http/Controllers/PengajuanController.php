<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function index(){
        return view('dosen\Pengajuan\tampilpengajuan');
        }
}
