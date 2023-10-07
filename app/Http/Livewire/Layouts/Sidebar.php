<?php

namespace App\Http\Livewire\Layouts;

use Livewire\Component;
use App\Models\Pengaduan;

class Sidebar extends Component
{
    public function render()
    {
        $countPengaduan = Pengaduan::where('status', '0')->count();
        return view('livewire.sidebar', ['countPengaduan' => $countPengaduan]);
    }
}
