<?php

namespace App\Http\Controllers;

use App\Models\Entitat;
use App\Models\Refugi;
use Illuminate\Http\Request;

class EntitatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $refugis = Refugi::orderBy('nom')->get();
        $entitats = Entitat::orderBy('nom')->get();

        return view('llistaentitats', ['refugis'=>$refugis, 'entitats'=>$entitats]);
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
     * @param  \App\Models\Entitat  $entitat
     * @return \Illuminate\Http\Response
     */
    public function show(Entitat $entitat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entitat  $entitat
     * @return \Illuminate\Http\Response
     */
    public function edit(Entitat $entitat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entitat  $entitat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entitat $entitat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entitat  $entitat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entitat $entitat)
    {
        //
    }
}
