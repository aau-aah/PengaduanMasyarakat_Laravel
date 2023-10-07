<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TanggapanController extends Controller
{
    public function index()
    {
        return view('pages.tanggapan.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggapan' => 'required|string',
            'status' => 'required|string',
            'foto' => 'required|image|mimes:jpg,jpeg,png|max:4096',
        ]);
        /**
         * Configure request form.
         **/

        //  Foto
        $newName = '';
        $extension = $request->file('foto')->getClientOriginalExtension();
        $newName = Auth::user()->username . '-' . now()->timestamp . '-' . Str::random(5) . '.' . $extension;
        $path = $request->file('foto')->storeAs('foto_tanggapan', $newName);

        // tgl_pengaduan
        $date = date('Y-m-d H:i:s');

        $tanggapan = Tanggapan::create([
            'id_tanggapan' => $this->generateUniqueCodeTanggapan(),
            'id_pengaduan' => $request['id_pengaduan'],
            'tgl_tanggapan' => $date,
            'tanggapan' => $request['tanggapan'],
            'foto' => $newName,
            'id_petugas' => Auth::user()->id_petugas,
        ]);

        $pengaduan = Pengaduan::find($request->id_pengaduan);
        $pengaduan->status = $request->status;
        $pengaduan->save();

        return redirect()->back()->with('success', 'Tanggapan Berhasil dikirim.');
    }



    public function generateUniqueCodeTanggapan()
    {
        do {
            $code = random_int(1000, 9999);
        } while (Tanggapan::where("id_tanggapan", "=", $code)->first());

        return $code;
    }
}
