<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
class IdiomaController extends Controller {
    public function index($idioma){
        App::setlocale($idioma);
        session()->put('idioma', $idioma);
        return redirect()->back();
    }
}