<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('buku.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $buku = new buku();
        return view('buku.tambahbuku', compact('buku'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $buku = [
        'kode' => $request->kode,
        'judul' => $request->judul,
        'kategori' => $request->kategori,
        'keterangan' => $request->keterangan,
        ];
        buku::create($buku);
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        //
    }
}
