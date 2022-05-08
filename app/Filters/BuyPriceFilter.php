<?php

// BuyPriceFilter.php

namespace App\Filters;

class BuyPriceFilter
{
    public function filter($builder, $value)
    {
        $arr = json_decode($value, true);
        return $builder->whereBetween('buyPrice', [$arr[0],$arr[1]]);
    }
}