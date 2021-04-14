<?php

namespace App\Repositories;

use Carbon\Carbon;

class CollectionSalesRepository implements SalesRepositoryInterface
{
    public function between(Carbon $startDate, Carbon $endDate): float
    {
        return collect([
                [
                    'created_at' => new Carbon('2021-03-19 14:43:40'),
                    'charge'     => '2111',
                ],
            ])->whereBetween('created_at', [$startDate, $endDate])->sum('charge') / 100;
    }
}
