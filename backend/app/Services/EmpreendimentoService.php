<?php

namespace App\Services;

use App\Contracts\EmpreendimentoContract;
use App\Models\Empreendimento;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Log;

/**
 * Class EmpreendimentoService.
 */
class EmpreendimentoService implements EmpreendimentoContract
{
    /**
     * @param  string $filtro
     *
     * @return Collection
     */
    public function getAll ($filtro = null) {
        try {
            if (!empty($filtro)) {
                $response = Empreendimento::where('nome', 'like', '%' . $filtro . '%')->get();
            }
            else {
                $response = Empreendimento::get();
            }
            Log::info("EMPREENDIMENTOS:".gettype($response));
            return $response;
        } catch (Exception $e) {
            Log::info('Erro ao listar os empreendimentos, usuário: '.auth()->user()->name.' mensagem: '.$e->getMessage());
        }
    }

    /**
     * @param  array  $data
     *
     * @return bool
     */
    public function store(array $data = []): bool
    {
        try {
            $empreendimento = new Empreendimento();
            $empreendimento->nome = $data['nome'];
            $empreendimento->localizacao = $data['localizacao'];
            $empreendimento->previsao_entrega = $data['previsao_entrega'];
            return $empreendimento->save();
        } catch (Exception $e) {
            Log::info('Erro ao inserir empreendimento, usuário: '.auth()->user()->name.' mensagem: '.$e->getMessage());
        }
    }

    /**
     * @param  array  $data
     *
     * @return Empreendimento
     */
    public function update(Empreendimento $empreendimento, array $data = []): bool
    {
        try {
            $empreendimento = Empreendimento::findOrFail($empreendimento->id);
            $empreendimento->nome = $data['nome'];
            $empreendimento->localizacao = $data['localizacao'];
            $empreendimento->previsao_entrega = $data['previsao_entrega'];
            return $empreendimento->save();
        } catch (Exception $e) {
            Log::info('Erro ao atualizar empreendimento, usuário: '.auth()->user()->name.' mensagem: '.$e->getMessage());
        }
    }

    /**
     * @param  array  $data
     *
     * @return Empreendimento
     */
    public function destroy(Empreendimento $empreendimento): bool
    {
        try {
            return $empreendimento->delete();
        } catch (Exception $e) {
            Log::info('Erro ao atualizar empreendimento, usuário: '.auth()->user()->name.' mensagem: '.$e->getMessage());
        }        
    }
}
