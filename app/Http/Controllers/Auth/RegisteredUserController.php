<?php

namespace App\Http\Controllers\Auth;

use App\Models\Masyarakat;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Petugas;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration petugas view.
     */
    public function registerPetugas()
    {
        return view('auth.register-petugas');
    }

    /**
     * Handle an incoming registration petugas request.
     */
    public function storePetugas(Request $request)
    {
        /**
         * Validation.
         **/
        $validated = $request->validate([
            'nama_petugas' => 'required|string',
            'username' => 'required|min:4|max:25|unique:masyarakat|unique:petugas',
            'telp' => 'required|min_digits:10|max_digits:13|numeric|unique:masyarakat|unique:petugas',
            'level' => 'required',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8'
        ]);


        /**
         * Input form to database.
         **/
        Petugas::create([
            'id_petugas' => $this->generateUniqueCodePetugas(),
            'nama_petugas' => $request['nama_petugas'],
            'username' => $request['username'],
            'telp' => $request['telp'],
            'level' => $request['level'],
            'password' => Hash::make($request['password'])
        ]);
        return redirect('/');
    }

    /**
     * Handle generate unique code petugas
     */
    public function generateUniqueCodePetugas()
    {
        do {
            $code = random_int(10000, 99999);
        } while (Petugas::where("id_petugas", "=", $code)->first());

        return $code;
    }



    /**========================================================= */




    /**
     * Display the registration masyarakat view.
     */
    public function registerMasyarakat()
    {
        return view('auth.register-masyarakat');
    }

    /**
     * Handle an incoming registration masyarakat request.
     */
    public function storeMasyarakat(Request $request)
    {
        /**
         * Validation.
         **/
        $validated = $request->validate([
            'nama' => 'required|string',
            'nik' => 'required|min_digits:16|max_digits:16|numeric|unique:masyarakat',
            'username' => 'required|min:4|max:25|unique:masyarakat|unique:petugas',
            'telp' => 'required|min_digits:10|max_digits:13|numeric|unique:masyarakat|unique:petugas',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8'
        ]);

        /**
         * Input form to database.
         **/
        Masyarakat::create([
            'nama' => Str::lower($request['nama']),
            'username' => Str::lower($request['username']),
            'nik' => $request['nik'],
            'telp' => $request['telp'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }
}
