<?php

// MetricFilter.php

namespace App\Filters;

class MetricFilter
{
    public function filter($builder, $value)
    {
        return $builder->where('metric', $value);
    }
}