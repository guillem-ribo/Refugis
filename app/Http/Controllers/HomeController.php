<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Refugi;
use App\Models\Entitat;
use App\Models\Municipi;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //

    public function index()
    {
        $refugis = Refugi::orderBy(DB::raw('RAND()'))->get();

        return view('home', ['refugis'=>$refugis]);
    }

    public function search() 
    {
        $text = $_GET['consulta'];

        $refugis = Refugi::where('nom', 'LIKE', '%'.$text.'%')
        ->orderBy('nom', 'asc')->get();
        
        return view('buscar', ['refugis'=>$refugis, 'text'=>$text]);
    }

}
