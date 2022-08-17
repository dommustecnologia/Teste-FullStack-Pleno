<?php

namespace App\Http\Controllers;

use App\Contracts\UnidadeContract;
use Illuminate\Http\Request;

class UnidadeController extends Controller
{
    //Lista todos as unidades
    public function getAllByEmpreendimentoIdAndFilter($empreendimento_id, $filtro = null, UnidadeContract $unidadeContract) 
    {
        return $unidadeContract->getAllByEmpreendimentoIdAndFilter($empreendimento_id, $filtro);
    }
}
