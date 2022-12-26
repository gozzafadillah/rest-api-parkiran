<?php

namespace App\Http\Controllers;

use App\Models\Plat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plat = Plat::all();
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
            "Plat" => $request->Plat,
            "Nama" => $request->Nama,
            "ID_Plat" => $request->ID_Plat,
            "Keterangan" => $request->Keterangan,
            "Free" => $request->Free,
            "Saldo" => $request->Saldo,
            "Status" => $request->Status,
            "Plat_Nomor" => $request->Plat_Nomor,
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
        $data = DB::table('data_plat')->where("Plat", "=", $plat->Plat)->get();
        return response()->json([
            "data" => $data
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
        $plat->Nama = $request->Nama;
        $plat->Plat = $request->Plat;
        $plat->ID_Plat = $request->ID_Plat;
        $plat->Keterangan = $request->Keterangan;
        $plat->Plat_Nomor = $request->Plat_Nomor;
        $plat->Status = $request->Status;
        $plat->Free = $request->Free;
        $plat->Saldo = $request->Saldo;
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
            "message" => "success delete data",
            "data" => $plat
        ]);
    }
}
