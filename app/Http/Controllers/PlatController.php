<?php

namespace App\Http\Controllers;

use App\Models\Plat;
use Illuminate\Http\Request;

class PlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plat = Plat::paginate(10);
        return response()->json([
            "data" => $plat
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
        $plat = Plat::create([
            "plat" => $request->plat,
            "nama" => $request->nama,
            "id_plat" => $request->id_plat,
            "keterangan" => $request->keterangan,
            "free" => $request->free,
            "saldo" => $request->saldo,
            "status" => $request->status,
            "plat_nomor" => $request->plat_nomor,
        ]);
        return response()->json([
            "data" => $plat
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plat  $plat
     * @return \Illuminate\Http\Response
     */
    public function show(Plat $plat)
    {
        return response()->json([
            "data" => $plat
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plat  $plat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plat $plat)
    {
        $plat->nama = $request->nama;
        $plat->plat = $request->plat;
        $plat->id_plat = $request->id_plat;
        $plat->keterangan = $request->keterangan;
        $plat->plat_nomor = $request->plat_nomor;
        $plat->status = $request->status;
        $plat->free = $request->free;
        $plat->saldo = $request->saldo;
        $plat->save();

        return response()->json([
            'data' => $plat
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plat  $plat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plat $plat)
    {
        $plat->delete();
        return response()->json([
            "message" => "success delete data"
        ]);
    }
}
