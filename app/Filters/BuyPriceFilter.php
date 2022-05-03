<?php

// BuyPriceFilter.php

namespace App\Filters;

class BuyPriceFilter
{
    public function filter($builder, $value)
    {
        return $builder->where('buyPrice', $value);
    }
}