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

    public function indexmasjid()
    {
        $masjid = Masjid::all();
        return view('admin.masjid.index', ['masjid' => $masjid]);
    }

    public function createmasjid()
    {
        return view('admin.masjid.create');
    }

    public function storemasjid(Request $request)
    {
        Masjid::create($request->all());
        return redirect('/admin/masjid') ->with ('status', 'Data masjid berhasil ditambahkan');
    }
}
