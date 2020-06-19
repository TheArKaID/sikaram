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

    public function indexmubaligh()
    {
        $mubaligh = Mubaligh::all();
        return view('admin.mubaligh.index', ['mubaligh' => $mubaligh]);
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

    public function createmubaligh()
    {
        return view('admin.mubaligh.create');
    }
  
    public function storemasjid(Request $request)
    {
        switch ($request->input('action')) {
            case 'tambah':
                $input = $request->all();
                $tanggal = date_format(date_create($input->tanggal), "D, d M Y");
                $jam = $input->jam;
                $date = $tanggal ." Jam ". $jam;
                $input->waktu = $date;
                
                Masjid::create($input);

                return redirect('/admin/masjid') ->with ('status', 'Jadwal Kajian berhasil ditambahkan');
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
  
    public function storemubaligh(Request $request)
    {
        switch ($request->input('action')) {
            case 'tambah':
                Mubaligh::create($request->all());
                return redirect('/admin/mubaligh') ->with ('status', 'Data Mubaligh berhasil ditambahkan');
                break;
    
            case 'kembali':
                return redirect('/admin/mubaligh');
                break;
        }
    }
            
    public function showmasjid(Masjid $masjid)
    {
        return view('admin.masjid.edit', compact ('masjid'));
    }
    
    public function showjadwal(Jadwal $jadwal)
    {
        $masjid = Masjid::pluck('nama', 'id');
        $mubaligh = Mubaligh::pluck('nama', 'id');
        return view('admin.jadwal.edit', compact ('jadwal'), ['masjid' => $masjid, 'mubaligh' => $mubaligh]);
    }

    
    public function showmubaligh(Mubaligh $mubaligh)
    {
        return view('admin.mubaligh.edit', compact ('mubaligh'));
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

    public function updatemubaligh(Request $request, Mubaligh $mubaligh)
    {
        switch ($request->input('action')) {
            case 'edit':
                Mubaligh::where('id', $mubaligh->id)
                ->update([
                'nama' => $request->nama,
                'nohp' => $request->nohp,
                'alamat' => $request->alamat
                ]);
                return redirect('/admin/mubaligh') ->with ('status', 'Data Mubaligh Berhasil Diubah!');
                break;
    
            case 'kembali':
                return redirect('/admin/mubaligh');
                break;
        }
    }

    public function updatejadwal(Request $request, Jadwal $jadwal)
    {
        switch ($request->input('action')) {
            case 'edit':
                Jadwal::where('id', $jadwal->id)
                ->update([
                'id_mubaligh' => $request->id_mubaligh,
                'id_masjid' => $request->id_masjid,
                'waktu' => $request->waktu,
                'tema' => $request->tema
                ]);
                return redirect('/admin/jadwal') ->with ('status', 'Data Jadwal Berhasil Diubah!');
                break;
    
            case 'kembali':
                return redirect('/admin/jadwal');
                break;
        }
    }

    public function destroymasjid(Masjid $masjid)
    {
        Masjid::destroy($masjid -> id);
        return redirect('/admin/masjid') ->with ('status', 'Data Masjid Berhasil Dihapus');
    }
    
    public function destroymubaligh(Mubaligh $mubaligh)
    {
        Mubaligh::destroy($mubaligh -> id);
        return redirect('/admin/mubaligh') ->with ('status', 'Data Mubaligh Berhasil Dihapus');
    }

    public function destroyjadwal(jadwal $jadwal)
    {
        Jadwal::destroy($jadwal -> id);
        return redirect('/admin/jadwal') ->with ('status', 'Data Jadwal Berhasil Dihapus');
    }
}
