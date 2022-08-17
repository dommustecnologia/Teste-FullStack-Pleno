<?php

namespace App\Services;

use App\Contracts\UnidadeContract;
use App\Models\Unidade;
use App\Models\Empreendimento;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Log;

/**
 * Class UnidadeService.
 */
class UnidadeService implements UnidadeContract
{
    /**
     * @param  string $filtro
     *
     * @return Collection
     */
    public function getAllByEmpreendimentoIdAndFilter (int $empreendimentoId, $filtro = null) {
        try {
            if (!empty($filtro)) {
                $unidades = Unidade::where('empreendimento_id', $empreendimentoId)
                    ->where('bloco', 'like', '%' . $filtro . '%')
                    ->get();
            }
            else {
                $unidades = Unidade::all();
            }            
            return $unidades;
        } catch (Exception $e) {
            Log::info('Erro ao listar os unidades, usuário: '.auth()->user()->name.' mensagem: '.$e->getMessage());
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
            $unidade = new Unidade();
            $unidade->bloco = $data['bloco'];
            $unidade->empreendimento_id = $data['empreendimento_id'];
            $unidade->status = $data['status'];
            $unidade->valor = $data['valor'];
            return $unidade->save();
        } catch (Exception $e) {
            Log::info('Erro ao inserir unidade, usuário: '.auth()->user()->name.' mensagem: '.$e->getMessage());
        }
    }

    /**
     * @param  array  $data
     *
     * @return Unidade
     */
    public function update(Unidade $unidade, array $data = []): bool
    {
        try {
            $unidade = Unidade::findOrFail($unidade->id);
            $unidade->bloco = $data['bloco'];
            $unidade->empreendimento_id = $data['empreendimento_id'];
            $unidade->status = $data['status'];
            $unidade->valor = $data['valor'];
            return $unidade->save();
        } catch (Exception $e) {
            Log::info('Erro ao atualizar unidade, usuário: '.auth()->user()->name.' mensagem: '.$e->getMessage());
        }
    }

    /**
     * @param  array  $data
     *
     * @return Unidade
     */
    public function destroy(Unidade $unidade): bool
    {
        try {
            return $unidade->delete();
        } catch (Exception $e) {
            Log::info('Erro ao atualizar unidade, usuário: '.auth()->user()->name.' mensagem: '.$e->getMessage());
        }        
    }
}
