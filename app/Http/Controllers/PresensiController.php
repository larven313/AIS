<?php

namespace App\Http\Controllers;

use App\Models\Khs;
use App\Models\Mahasiswa;
use App\Models\Matkul;
use App\Models\Presensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PresensiController extends Controller
{
    public function index()
    {
        $present = Presensi::all();

        $data = [
            "dataPresensi" => $present,
        ];

        return view('presensi.index', $data);
    }

    public function create()
    {
        $matkul = Matkul::all();
        $mahasiswa = Mahasiswa::all();

        $data = [
            "dataMatkul" => $matkul,
            "dataMhs" => $mahasiswa,
        ];

        return view("presensi.create", $data);
    }

    public function store(Request $request)
    {
        // buat method create untuk menambahkan data
        $validatedData = $request->validate([
            'nama' => 'required',
            'matkul' => 'required',
            'status' => 'required|in:H,I,A',
        ]);

        $present = new Presensi(
            $present = [
                "idmhs" => $request->nama,
                "idmatkul" => $request->matkul,
                "status" => $request->status,
            ]
        );
        $present->save();

        return redirect()->route('presensi')->with('success', 'Data berhasil dibuat!');
    }

    public function update($id)
    {
        $present = Presensi::find($id);
        $matkul = Matkul::all();
        $mahasiswa = Mahasiswa::all();

        if (!$present) {
            return redirect()->route('presensi')->with('error', 'Data tidak ditemukan!');
        } else {
            $data = [
                "present" => $present,
                "dataMatkul" => $matkul,
                "dataMhs" => $mahasiswa,
            ];
            return view("presensi.update", $data);
        }
    }

    public function edit(Request $request, $id)
    {
        $present = Presensi::find($id);

        if (!$present) {
            return $this->index()->with('error', 'Data tidak ditemukan!');
        } else {
            $input = [
                "idmhs" => $request->nama ?? $present->nama,
                "idmatkul" => $request->matkul ?? $present->matkul,
                "status" => $request->status ?? $present->status,
            ];
            $present->update($input);
        }

        return redirect()->route('presensi')->with('success', 'Data berhasil diubah!');
    }

    public function destroy($id)
    {
        $present = Presensi::find($id);

        if (!$present) {
            return $this->index()->with('error', 'Data tidak ditemukan!');
        } else {
            $present->delete();
        }
        return back()->with('success', 'Data berhasil dihapus!');
    }

    public function show($id)
    {
        $present = Presensi::find($id);
        $matkul = Matkul::find($present->idmatkul);
        $mhs = Mahasiswa::find($present->idmhs);
        $khs = Khs::where('idpresensi', '=', $id)->first();

        if (!$khs) {
            $data = [
                "dataPresensi" => $present,
                "dataMatkul" => $matkul,
                "dataMhs" => $mhs,
                "dataKhs" => null,
            ];
            return view("presensi.detail", $data);
        } else {
            $data = [
                "dataPresensi" => $present,
                "dataMatkul" => $matkul,
                "dataMhs" => $mhs,
                "dataKhs" => $khs,
            ];
            return view("presensi.detail", $data);
        }
    }
}
