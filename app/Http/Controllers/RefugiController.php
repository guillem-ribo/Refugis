<?php

namespace App\Http\Controllers;

use App\Models\Refugi;
use App\Models\Entitat;
use App\Models\Municipi;
use App\Models\Comarca;
use Illuminate\Http\Request;

class RefugiController extends Controller
{

    public function showRefugi($id)
    {
        $refugi = Refugi::findOrFail($id);
        return view('detall.refugi', ['refugi' => $refugi]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Refugi  $refugi
     * @return \Illuminate\Http\Response
     */

    public function show()
    {
        $refugis = Refugi::orderBy('nom')->get();
        $municipi = Municipi::orderBy('nom')->get();
        $comarca = Comarca::orderBy('nom')->get();

        return view('llista', ['refugis'=>$refugis, 'municipi' => $municipi, 'comarca' => $comarca]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Refugi  $refugi
     * @return \Illuminate\Http\Response
     */
    public function edit(Refugi $refugi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Refugi  $refugi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Refugi $refugi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Refugi  $refugi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Refugi $refugi)
    {
        //
    }
}
