<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPensiun;

class DataPensiunController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'nama' => 'required',
            'tanggal_lahir' => 'required|date',
            'jabatan' => 'required',
            'pangkat' => 'required',
            'golongan' => 'required',
        ]);

        // Menyimpan data baru ke dalam database
        DataPensiun::create($validatedData);

        // Redirect atau kembalikan response sesuai kebutuhan
        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }
}
