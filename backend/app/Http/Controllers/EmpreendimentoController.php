<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empreendimento;

class EmpreendimentoController extends Controller
{
    public function getAll($filtro = null) 
    {
        return Empreendimento::all();
    }
}
