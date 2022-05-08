<?php

// ProductFilter.php

namespace App\Filters;

use App\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;

class StorefrontFilter extends AbstractFilter
{
    protected $filters = [
        'metric' => MetricFilter::class,
        'floor' => FloorFilter::class,
        'available' => AvailableFilter::class,
        'visible' => VisibleFilter::class,
        'buyPrice' => BuyPriceFilter::class,
        'rentPrice' => RentPriceFilter::class
    ];
}