<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    public function index()
    {
        $masyarakat = Masyarakat::all();
        return view('pages.admin.masyarakat', ['masyarakat' => $masyarakat]);
    }
}
