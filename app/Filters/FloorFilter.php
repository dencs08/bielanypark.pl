<?php

// FloorFilter.php

namespace App\Filters;

class FloorFilter
{
    public function filter($builder, $value)
    {
        return $builder->where('floor', $value);
    }
}