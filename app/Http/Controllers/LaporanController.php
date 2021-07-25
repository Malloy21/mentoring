<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function report(){
        $data=[
            'kehadiran'=>DB::table('kehadiran')->get(),
            'data_mente'=>DB::table('data_mente')->get(),
            
        ];
        return view('laporan.report',$data);
    }
}
