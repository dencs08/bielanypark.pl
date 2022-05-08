<?php

// VisibleFiltrer.php

namespace App\Filters;

class VisibleFilter
{
    public function filter($builder, $value)
    {
        return $builder->where('visible', $value);
    }
}