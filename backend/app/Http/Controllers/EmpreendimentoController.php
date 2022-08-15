<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empreendimento;
use App\Contracts\EmpreendimentoContract;

class EmpreendimentoController extends Controller
{
    //Lista todos os empreendimentos
    public function getAll($filtro = null, EmpreendimentoContract $empreendimentoContract) 
    {
        return $empreendimentoContract->getAll($filtro);
    }

    //Insere um novo empreendimento
    public function store (Request $request, EmpreendimentoContract $empreendimentoContract) {
        if ($empreendimentoContract->store($request->all())) {
            $responseArray = [
                'status' => 'success', 
                'message' => 'O empreendimento foi inserido com sucesso'
            ];
        }
        else {
            $responseArray = [
                'status' => 'error', 
                'message' => 'Um erro ocorreu ao inserir o empreendimento, por favor procure o administrador do sistema.'
            ];
        }    
        return response()->json($responseArray);
    }
}
