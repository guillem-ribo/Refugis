<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Refugi;
use App\Models\Comarca;
use App\Models\Municipi;

class ComarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $refugis = Refugi::orderBy('nom')->get();
        $comarques = Comarca::orderBy('nom')->get();
        $municipis = Municipi::orderBy('nom')->get();

        return view('llistacomarques', ['refugis'=>$refugis, 'comarques'=>$comarques, 'municipis'=>$municipis]);
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
     * @param  \App\Models\Comarca  $comarca
     * @return \Illuminate\Http\Response
     */
    public function show(Comarca $comarca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comarca  $comarca
     * @return \Illuminate\Http\Response
     */
    public function edit(Comarca $comarca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comarca  $comarca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comarca $comarca)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comarca  $comarca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comarca $comarca)
    {
        //
    }
}
