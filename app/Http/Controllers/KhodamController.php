<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Khodam;

class KhodamController extends Controller
{
    public function getKhodam(Request $request)
    {
        $nama = $request->input('nama');

        if ($nama) {
            $khodam = Khodam::inRandomOrder()->first();
            if ($khodam) {
                return response()->json(['name' => $khodam->name]);
            } else {
                return response()->json(['error' => 'Data Khodam tidak ditemukan.'], 404);
            }
        }

        return response()->json(['error' => 'Nama tidak boleh kosong.'], 400);
    }

    public function inputKhodam(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
        ]);
    
        Khodam::create(['name' => $validatedData['name']]);
    
        return redirect()->back()->with('success', 'Khodam berhasil ditambahkan.');
    }
    

    public function createKhodam(){

        return view('inputKhodam');
    }
}



