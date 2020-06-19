<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Jadwal;

class KajianController extends Controller
{
    public function index()
    {
        $kajians = Jadwal::all();
        return view('pages.kajian', ['kajians' => $kajians]);
    }

    public function search(Request $request)    
     {   
        $cari = $request->search;           
        $kajians = Jadwal::where('tema','like',"%".$cari."%")->paginate();
 
        return view('pages.kajian',['kajians' => $kajians]);
    }
}
