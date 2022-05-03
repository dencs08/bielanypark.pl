<?php

// AvailableFilter.php

namespace App\Filters;

class AvailableFilter
{
    public function filter($builder, $value)
    {
        return $builder->where('available', $value);
    }
}