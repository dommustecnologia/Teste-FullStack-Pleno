<?php

namespace App\Models\Traits\Relationship;

use App\Models\Unidade;

trait EmpreendimentoRelationship
{
    /**
     * @return mixed
     */
    public function unidades()
    {
        return $this->hasMany(Unidade::class);
    }    
}
