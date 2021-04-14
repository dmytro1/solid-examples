<?php

namespace App\Reporting;

class ShapesHtmlOutput implements OutputInterface
{
    public function output(float $area): string
    {
        return "<h1>Area: $area m<sup>2</sup></h1>";
    }
}
