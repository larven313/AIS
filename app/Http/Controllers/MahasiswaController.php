<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $new_student;

    public function __construct()
    {
        $this->new_student = new Mahasiswa();
    }
    public function index()
    {
        // get all data mahasiswa join to tbl_prodi
        $students = DB::table('mahasiswa')
            ->join('prodi', 'prodi.idprodi', 'mahasiswa.idprodi')
            ->select('mahasiswa.*', 'prodi.nama_prodi as prodi')
            ->get();

        return view('mahasiswa.index', [
            'students' => $students
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prodi = DB::table('prodi')->select('*')->get();

        return view('mahasiswa.create', [
            'prodi' => $prodi
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->new_student->nim_mhs = $request->inp_nim;
        $this->new_student->nama = $request->inp_nama;
        $this->new_student->alamat = $request->inp_alamat;
        $this->new_student->gender = $request->inp_gender;
        $this->new_student->idprodi = $request->inp_prodi;
        $this->new_student->iduser = null;

        $rules = [
            'nim_mhs' => 'required|min:4|max:12',
            'nama' => 'required|min:3|max"30',
            'alamat' => 'required|min:4',
            'idprodi' => 'required',
            'iduser' => 'required'
        ];
        $messages = [
            'required' => ':attribute tidak boleh kosong',
            'min' => 'karakter :attribute terlalu pendek',
            'max' => 'karakter :attribute terlalu panjang'
        ];

        $this->validate($request, $rules, $messages);

        // dd($request);

        $this->new_student->save();

        return redirect()->route('mahasiswa')->with('status', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($idmhs)
    {
        $mahasiswa = Mahasiswa::find($idmhs);
        // $prodi = DB::table('prodi')->select('*')->where('idmhs', '=', $id)->get();
        $prodi = DB::table('prodi')->select('*')->get();

        return view('mahasiswa.edit', [
            'dataMahasiswa' => $mahasiswa,
            'prodi' => $prodi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idmhs)
    {
        $edit_student = Mahasiswa::find($idmhs);
        $edit_student->nim_mhs = $request->inp_nim;
        $edit_student->nama = $request->inp_nama;
        $edit_student->alamat = $request->inp_alamat;
        $edit_student->gender = $request->inp_gender;
        $edit_student->idprodi = $request->inp_prodi;
        $edit_student->iduser = null;

        // dd($request);

        $edit_student->save();

        return redirect()->route('mahasiswa')->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($idmhs)
    {
        $delete_mahasiswa = Mahasiswa::findOrFail($idmhs);
        $delete_mahasiswa->delete();

        return redirect()->route('mahasiswa')->with('status', 'Data Berhasil Dihapus');
    }
}
