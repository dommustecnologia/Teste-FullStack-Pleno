<?php

namespace App\Contracts;

use App\Models\Empreendimento;

interface EmpreendimentoContract
{
    public function getAllByFilter($filtro);

    public function store(array $data = []): bool;

    public function update(Empreendimento $empreendimento, array $data = []): bool;

    public function destroy(Empreendimento $empreendimento): bool;
}