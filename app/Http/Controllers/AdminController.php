<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Masjid;
use App\Jadwal;
use App\Mubaligh;
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

    public function indexjadwal()
    {
        $jadwal = Jadwal::all();
        return view('admin.jadwal.index', ['jadwal' => $jadwal]);
    }

    public function createmasjid()
    {
        return view('admin.masjid.create');
    }

    public function createjadwal()
    {
        $masjid = Masjid::pluck('nama', 'id');
        $mubaligh = Mubaligh::pluck('nama', 'id');
        return view('admin.jadwal.create', ['masjid' => $masjid, 'mubaligh' => $mubaligh]);
    }

    public function storemasjid(Request $request)
    {
        switch ($request->input('action')) {
            case 'tambah':
                Masjid::create($request->all());
                return redirect('/admin/masjid') ->with ('status', 'Data masjid berhasil ditambahkan');
                break;
    
            case 'kembali':
                return redirect('/admin/masjid');
                break;
        }
    }

    public function storejadwal(Request $request)
    {
        switch ($request->input('action')) {
            case 'tambah':
                Jadwal::create($request->all());
                return redirect('/admin/jadwal') ->with ('status', 'Data Jadwal berhasil ditambahkan');
                break;
    
            case 'kembali':
                return redirect('/admin/jadwal');
                break;
        }
    }

    public function showmasjid(Masjid $masjid)
    {
        return view('admin.masjid.edit', compact ('masjid'));
    }
    
    public function showjadwal(Jadwal $jadwal)
    {
        return view('admin.jadwal.edit', compact ('jadwal'));
    }

    public function updatemasjid(Request $request, Masjid $masjid)
    {
        switch ($request->input('action')) {
            case 'edit':
                Masjid::where('id', $masjid->id)
                ->update([
                'nama' => $request->nama,
                'kontak' => $request->kontak,
                'alamat' => $request->alamat
                ]);
                return redirect('/admin/masjid') ->with ('status', 'Data Masjid Berhasil Diubah!');
                break;
    
            case 'kembali':
                return redirect('/admin/masjid');
                break;
        }
    }

    public function destroymasjid(Masjid $masjid)
    {
        Masjid::destroy($masjid -> id);
        return redirect('/admin/masjid') ->with ('status', 'Data Masjid Berhasil Dihapus');
    }
}
