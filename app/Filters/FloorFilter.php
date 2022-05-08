<?php

// FloorFilter.php

namespace App\Filters;

class FloorFilter
{
    public function filter($builder, $value)
    {
        $arr = json_decode($value, true);
        
        if(count($arr) < 2){
            $arr[] = '10';
        }

        return $builder->whereIn('floor', [$arr[0],$arr[1]]);
        // return $builder->where('floor', $value);
    }
}