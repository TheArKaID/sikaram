<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Masjid;

class MasjidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masjids = Masjid::all();
        return view('pages.masjid', ['masjids' => $masjids]);
    }

    public function search()
    {   
        $cari = $_GET['search'];
        $masjids = Masjid::where('nama','like',"%".$cari."%")->paginate(); 
 
        return view('pages.masjid',['masjids' => $masjids]);
    }
}
