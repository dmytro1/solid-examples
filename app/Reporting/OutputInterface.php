<?php

namespace App\Reporting;

interface OutputInterface
{
    public function output(float $outputData): string;
}
