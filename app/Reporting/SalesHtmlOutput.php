<?php

namespace App\Reporting;

class SalesHtmlOutput implements SalesOutputInterface
{
    public function output(float $sales): string
    {
        return "<h1>Sales: $sales</h1>";
    }
}
