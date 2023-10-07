<?php

namespace App\Http\Livewire\Pengaduan;

use Livewire\Component;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\Auth;

class PengaduanPetugas extends Component
{
    public function render()
    {
        if (Auth::user()->level === 'admin' || Auth::user()->level === 'petugas') {
            $pengaduan = Pengaduan::with('masyarakat:nik,username')
                ->orderBy('created_at', 'DESC')
                ->get();
        } else {
            $pengaduan = Pengaduan::where('nik', Auth::user()->nik)->orderByDesc('created_at')->get();
        }

        return view('pages.pengaduan.components.pengaduan-petugas', ['pengaduan' => $pengaduan]);
    }
}
