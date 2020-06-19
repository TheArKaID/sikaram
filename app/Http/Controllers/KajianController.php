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
        $post = DB::table('students')         
        ->where('nama','like',"%".$cari."%")         
        ->paginate(); 
 
        return view('students.index',['students' => $post]);
    }
}
