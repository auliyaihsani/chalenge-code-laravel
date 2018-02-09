<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kriminalitas;
use App\User;

class KriminalitasController extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
      return $this->middleware('auth');
    }


    public function index()
    {
        //
         $kriminalitas = Kriminalitas::paginate(20);
        return view('kriminal.index')->withKriminalitas($kriminalitas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('kriminal.create');
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
        $this->validate(request(),[
            'kecamatan'=> 'required',
            'kelurahan' => 'required',
            'informasi'=> 'required',
            ]);
            
            $kriminalitas = New Kriminalitas;
            $kriminalitas->kecamatan=$request->kecamatan;
            $kriminalitas->kelurahan=$request->kelurahan;
            $kriminalitas->informasi=$request->informasi;
            $kriminalitas->user_id = auth()->id();
            $kriminalitas->save();
        return redirect()->route('kriminal.show', $kriminalitas->id)->withMessage('berhasil disimpan');

      
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

         $kriminalitas = Kriminalitas::find($id);
         return view('kriminal.show')->withKriminalitas($kriminalitas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $kriminalitas = Kriminalitas::find($id);
        return view('kriminal.edit')->withKriminalitas($kriminalitas);
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
        //
         $this->validate(request(),[
            'kecamatan'=> 'required',
            'kelurahan' => 'required',
            'informasi'=> 'required',
            ]);

            $kriminalitas = Kriminalitas::find($id);
            $kriminalitas->kecamatan=$request->input('kecamatan');
            $kriminalitas->kelurahan=$request->input('kelurahan');
            $kriminalitas->informasi=$request->input('informasi');

            $kriminalitas->save();
        return redirect()->route('kriminal.show', $kriminalitas->id)->withMessage('berhasil di edit');
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
           $kriminalitas = Kriminalitas::find($id);
           $kriminalitas->delete();

        return redirect()->route('kriminal.index')->withMessage('berhasil di hapus')->withMessage('berhasil di hapus');
    }
}
