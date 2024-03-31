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


    public function destroy($id)
    {
        $dataPensiun = DataPensiun::findOrFail($id);
        $dataPensiun->delete();

        return redirect()->route('datapensiun')->with('success', 'Data has been deleted successfully');
    }

    public function edit($id)
    {
        $dataPensiun = DataPensiun::findOrFail($id);
        return view('datapensiun.edit', compact('dataPensiun'));
    }

    public function update(Request $request, $id)
    {
        $dataPensiun = DataPensiun::findOrFail($id);

        $dataPensiun->update($request->all());

        return redirect()->route('datapensiun.index')->with('success', 'DataPensiun has been updated successfully!');
    }


    
    

    
    
    
}
