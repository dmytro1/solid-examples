<?php

namespace App\Repositories;

use Carbon\Carbon;

interface SalesRepositoryInterface
{
    public function between(Carbon $startDate, Carbon $endDate): float;
}
