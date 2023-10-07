<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Masyarakat;
use App\Models\Pengaduan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengaduanController extends Controller
{
    public function index()
    {
        return view('pages.pengaduan.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'foto' => 'required|image|mimes:jpg,jpeg,png|max:15360',
            'isi_laporan' => 'required|string'
        ]);
        /**
         * Configure request form.
         **/

        //  Foto
        $newName = '';
        $extension = $request->file('foto')->getClientOriginalExtension();
        $newName = Auth::user()->username . '-' . now()->timestamp . '-' . Str::random(5) . '.' . $extension;
        $path = $request->file('foto')->storeAs('foto_pengaduan', $newName);

        // tgl_pengaduan
        $date = date('Y-m-d H:i:s');

        /**
         * Input form to database.
         **/
        $pengaduan =  Pengaduan::create([
            'id_pengaduan' => $this->generateUniqueCodePengaduan(),
            'tgl_pengaduan' => $date,
            'nik' => Auth::user()->nik,
            'isi_laporan' => $request->isi_laporan,
            'foto' => $newName,
            'status' => '0'

        ]);
        return redirect()->back()->with('success', 'Pengaduan Berhasil dikirim.');
    }


    public function show($username, $id)
    {

        $masyarakat = Masyarakat::where('username', $username)->firstOrFail();
        $pengaduan = Pengaduan::with('masyarakat', 'tanggapan.petugas')->where('nik', $masyarakat->nik)
            ->where('id_pengaduan', $id)
            ->firstOrFail();

        $chats = Chat::with('petugas', 'masyarakat')->where('id_pengaduan', $id)->orderBy('created_at', 'DESC')->get();
        return view('pages.pengaduan.show', compact('pengaduan', 'chats'));
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function generateUniqueCodePengaduan()
    {
        do {
            $code = random_int(1000, 9999);
        } while (Pengaduan::where("id_pengaduan", "=", $code)->first());

        return $code;
    }
}
