<?php

// RentPriceFilter.php

namespace App\Filters;

class RentPriceFilter
{
    public function filter($builder, $value)
    {
        return $builder->where('rentPrice', $value);
    }
}