<?php

namespace App\Http\Controllers;

use App\Mubaligh;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MubalighController extends Controller
{
    public function index()
    {
        $mubalighs = Mubaligh::all();
        return view('pages.mubaligh', ['mubaligh' => $mubalighs]);
    }

    public function search()
    {
        $cari = isset($_GET['search']) ? $_GET['search'] : "";
        $mubaligh = Mubaligh::where('nama','like',"%".$cari."%")->paginate();
        
        return view('pages.mubaligh', ['mubaligh' => $mubaligh]);
    }
}
