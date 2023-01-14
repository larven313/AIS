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
        $user = DB::table('user')->select('*')->get();

        return view('mahasiswa.create', [
            'prodi' => $prodi,
            'user' => $user
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

        $rules = [
            'nama' => "required|min:3|max:25",
            'nim_mhs' => "required|min:3|max:12",
            'alamat' => "required|min:5",
            'idprodi' => "required",
            'iduser' => "required"


        ];
        $messages = [
            'required' => ":attribute tidak boleh kosong",
            'min' => ":attribute karakter terlalu pendek",
            'max' => ":attribute karakter terlalu panjang ",
        ];
        $this->validate($request, $rules, $messages);

        $this->new_student->nim_mhs = $request->nim_mhs;
        $this->new_student->nama = $request->nama;
        $this->new_student->alamat = $request->alamat;
        $this->new_student->gender = $request->gender;
        $this->new_student->idprodi = $request->idprodi;
        $this->new_student->iduser = $request->iduser;

        $this->new_student->save();
        return redirect()->route('mahasiswa')->with('status', 'Berhasil Menambahkan Data ');
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
        $mhs = DB::table('mahasiswa')->join('prodi', 'prodi.idprodi', '=', 'mahasiswa.idprodi')
            ->join('user', 'user.iduser', '=', 'mahasiswa.iduser')
            ->where('idmhs', '=', $idmhs)->first();
        $user = DB::table('user')->select('*')->get();
        $prodi = DB::table('prodi')->select('*')->get();

        // dd($mhs);

        // dd($mhs);
        return view('mahasiswa.edit', [
            'dataMahasiswa' => $mahasiswa,
            'dataJoin' => $mhs,
            'user' => $user,
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
        $rules = [
            'inp_nama' => "required|min:3|max:25",
            'inp_nim' => "required|min:3|max:12",
            'inp_alamat' => "required|min:5",
            'inp_prodi' => "required"

        ];
        $messages = [
            'required' => ":attribute tidak boleh kosong",
            'min' => ":attribute karakter terlalu pendek",
            'max' => ":attribute karakter terlalu panjang ",
        ];
        $this->validate($request, $rules, $messages);

        $edit_student = Mahasiswa::find($idmhs);
        $edit_student->nim_mhs = $request->inp_nim;
        $edit_student->nama = $request->inp_nama;
        $edit_student->alamat = $request->inp_alamat;
        $edit_student->gender = $request->inp_gender;
        $edit_student->idprodi = $request->inp_prodi;
        $edit_student->iduser = $request->inp_user;

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
