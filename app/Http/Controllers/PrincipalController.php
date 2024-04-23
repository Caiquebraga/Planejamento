<?php

namespace App\Http\Controllers;
use App\Models\Planejamento;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index (Planejamento $planejamento){

        $plaEstra = $planejamento->all();

        return view ('lista_pei/index', ['plaEstra' => $plaEstra]);
    }
}
