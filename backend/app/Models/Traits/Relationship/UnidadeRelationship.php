<?php

namespace App\Models\Traits\Relationship;

use App\Models\Empreendimento;

trait UnidadeRelationship
{
    /**
     * @return mixed
     */
    public function empreendimento()
    {
        return $this->belongsTo(Empreendimento::class);
    }    
}
