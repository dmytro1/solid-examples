<?php

namespace App\Reporting;

// This class only gets the sales between the given dates.
// It doesn't deal with how with sales are stored, it doesn't
// deal with how to format the output, it doesn't deal with Auth
use App\Repositories\SalesRepositoryInterface;

class SalesReporter
{
    private $repository;

    public function __construct(SalesRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function between($startDate, $endDate, SalesOutputInterface $formatter): string
    {
        $sales = $this->repository->between($startDate, $endDate);

        return $formatter->output($sales);
    }
}
