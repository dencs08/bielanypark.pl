<?php

// MetricFilter.php

namespace App\Filters;

class MetricFilter
{
    public function filter($builder, $value)
    {        
        $arr = json_decode($value, true);
        return $builder->whereBetween('metric', [$arr[0],$arr[1]]);
    }
}