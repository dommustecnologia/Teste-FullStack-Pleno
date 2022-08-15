<?php

namespace App\Contracts;

use App\Models\Empreendimento;
use Illuminate\Database\Eloquent\Collection;

interface EmpreendimentoContract
{
    public function getAll($filtro) : Collection;

    public function store(array $data = []): bool;

    public function update(Empreendimento $empreendimento, array $data = []): bool

    public function destroy(Empreendimento $empreendimento): bool;
}