<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;
use App\Profil;

class PertanyaanController extends Controller
// CONTROLLER INI SUDAH MENYESUAIKAN DENGAN ELOQUENT DAN DIBUAT SEJAK HARI JUMAT. 
// BERHUBUNG TUGAS HARI INI TENTANG ELOQUENT, 
// JADI FILE INI TIDAK ADA PERUBAHAN DAN SAYA ANGGAP SUDAH MENYELESAIKAN TUGAS
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Pertanyaan::with('profil')->get();

        return view('pertanyaan.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Profil::all();

        return view('pertanyaan.create', [
            'items' => $items
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
        $data = $request->all();
        Pertanyaan::create($data);

        return redirect()->route('pertanyaan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Pertanyaan::findOrFail($id);

        return view('pertanyaan.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Pertanyaan::findOrFail($id);

        return view('pertanyaan.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $item = Pertanyaan::findOrFail($id);

        $item->update($data);

        return redirect()->route('pertanyaan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Pertanyaan::findOrFail($id);
        $item->delete();

        return redirect()->route('pertanyaan.index');
    }
}
