<?php

namespace App\Space\Workers;

use App\Reporting\ManageHtmlOutput;
use App\Space\Interfaces\ManageableInterface;
use App\Space\Interfaces\WorkableInterface;

/**
 * Class AndroidWorker
 * @package App\Space\Workers
 */
class AndroidWorker implements WorkableInterface, ManageableInterface
{
    private $output;

    public function __construct()
    {
        $this->output = app(ManageHtmlOutput::class);
    }

    public function work(): string
    {
        return '. Android working.';
    }

    public function beManaged(): string
    {
        $response = self::class . $this->work();

        return $this->output->output($response);
    }
}
