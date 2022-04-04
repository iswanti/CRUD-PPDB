<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\pdf;
use Illuminate\Http\Request;
use App\Models\SiswaBaru;


class SiswaBaruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = SiswaBaru :: orderBy("no","ASC")->get();
        return view('index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SiswaBaru::create([
            'no' => $request->no,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'agama' => $request->agama,
            'asal_smp' => $request->asal_smp,
            'jurusan' => $request->jurusan,   
        ]);

        return redirect('ppdb')->with('success','DATA SISWA BARU BERHASIL DITAMBAHKAN');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = SiswaBaru::findOrFail($id);
        return view('edit', compact('data'));
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
        $data = SiswaBaru::findOrFail($id);
        $request->validate([
            'no' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'asal_smp' => 'required',
            'jurusan' => 'required',
        ]);
        $data->update($request->all());
        return redirect('ppdb')->with('success','DATA SISWA BARU BERHASIL DIPERBAHARUI');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = SiswaBaru::findOrFail($id);
        $data->delete();
        return redirect('ppdb')->with('success','Data Siswa Baru berhasil dihapus');
    }

    //export pdf
    public function export(){
        $data = SiswaBaru::all();

        view()->share('data', $data);
        $pdf = PDF::loadView('data_pdf');
        return $pdf->download('datasiswa.pdf');

    }

   
        
    

}
