<?php

namespace App\Reporting;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

/**
 * Example of at least three responsibilities in the class.
 * Checking auth, querying data and formatting output.
 * Refactor this class to SalesReporter.
 *
 * Class SalesReporterBefore
 * @package App\Reporting
 */
class SalesReporterBefore
{
    public function between($startDate, $endDate): string
    {
        if (!Auth::check()) throw new \Exception('Auth required');

        $sales = $this->queryDatabaseForSalesBetween($startDate, $endDate);

        return $this->format($sales);
    }

    protected function queryDatabaseForSalesBetween(Carbon $startDate, Carbon $endDate)
    {
        return collect([
                [
                    'created_at' => new Carbon('2021-03-19 14:43:40'),
                    'charge'     => '211',
                ],
            ])->whereBetween('created_at', [$startDate, $endDate])->sum('charge') / 100;
    }

    protected function format(float $sales): string
    {
        return "<h1>Sales: $sales</h1>";
    }
}
