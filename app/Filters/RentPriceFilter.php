<?php

// RentPriceFilter.php

namespace App\Filters;

class RentPriceFilter
{
    public function filter($builder, $value)
    {
        $arr = json_decode($value, true);
        return $builder->whereBetween('rentPrice', [$arr[0],$arr[1]]);
    }
}