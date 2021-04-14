<?php

namespace App\Reporting;

interface SalesOutputInterface
{
    public function output(float $sales): string;
}
