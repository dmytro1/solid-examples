<?php

namespace App\Reporting;

class SalesHtmlOutput implements OutputInterface
{
    public function output(float $sales): string
    {
        return "<h1>Sales: $sales</h1>";
    }
}
