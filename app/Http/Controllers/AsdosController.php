<?php

namespace App\Http\Controllers;

use App\Models\Asdos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AsdosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        /**
         * Get All Relation with user & prodi
         * */
        // $asdos = Asdos::join("prodi", "prodi.idprodi", "asdos.idprodi")
        //     ->join("user", "user.iduser", "asdos.iduser")
        //     ->select("asdos.*", "prodi.nama_prodi as prodi", "user.username as user")
        //     ->get();

        $asdos = Asdos::join("prodi", "prodi.idprodi", "asdos.idprodi")
            ->select("asdos.*", "prodi.nama_prodi as prodi")
            ->get();

        $data = [
            "dataAsdos" => $asdos
        ];

        return view('asdos.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asdos  $asdos
     * @return \Illuminate\Http\Response
     */
    public function show(Asdos $asdos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asdos  $asdos
     * @return \Illuminate\Http\Response
     */
    public function edit(Asdos $asdos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asdos  $asdos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asdos $asdos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asdos  $asdos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asdos $asdos)
    {
        //
    }
}
