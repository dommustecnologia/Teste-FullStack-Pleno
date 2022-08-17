<?php

namespace App\Contracts;

use App\Models\Unidade;
use App\Models\Empreendimento;

interface UnidadeContract
{
    public function getAllByEmpreendimentoIdAndFilter(int $empreendimentoId, $filtro);

    public function store(array $data = []): bool;

    public function update(Unidade $unidade, array $data = []): bool;

    public function destroy(Unidade $unidade): bool;
}