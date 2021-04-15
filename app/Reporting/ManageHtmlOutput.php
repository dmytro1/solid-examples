<?php

namespace App\Reporting;

class ManageHtmlOutput implements OutputInterface
{
    public function output($outputData): string
    {
        return 'Class: ' . $outputData;
    }
}
