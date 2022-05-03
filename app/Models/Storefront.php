<?php

namespace App\Models;

use App\Filters\StorefrontFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Storefront extends Model
{
    // use HasFactory;

    public function scopeFilter(Builder $builder, $request)
    {
        return (new StorefrontFilter($request))->filter($builder);
    }
}
