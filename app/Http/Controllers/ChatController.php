<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Pengaduan;
use App\Models\Masyarakat;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_pengaduan' => 'required|integer',
            'content_chat' => 'required|string',
            'foto_chat' => 'image|mimes:jpg,jpeg,png|max:4096',
        ]);

        if ($request->hasFile('foto_chat')) {
            $newName = uniqid() . '-' . Auth::user()->username . '-' . Str::random(2) . '.' . $request->file('foto_chat')->getClientOriginalExtension();
            $path = $request->file('foto_chat')->storeAs('foto_chat', $newName);
        }

        $chat = Chat::create([
            'id_chat' => $this->generateUniqueCodeChat(),
            'content_chat' => $request->content_chat,
            'tgl_chat' => date('Y-m-d H:i:s'),
            'foto' => isset($newName) ? $newName : null,
            'id_pengaduan' => $request->id_pengaduan,
            'id_petugas' =>  Auth::user()->id_petugas,
            'nik' => Auth::user()->nik,
        ]);

        return redirect()->back()->with('success', 'Pesan Berhasil dikirim.');
    }

    public function destroy($id)
    {
        $chat = Chat::find($id);
        $chat->delete();
        return redirect()->back()->with('success', 'Chat deleted successfully');
    }

    public function generateUniqueCodeChat()
    {
        do {
            $code = random_int(1000, 9999);
        } while (Chat::where("id_chat", "=", $code)->first());

        return $code;
    }
}
