<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Masjid;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function masjid()
    {
        $masjid = Masjid::all();
        return view('admin.masjid', ['masjid' => $masjid]);
    }
}
