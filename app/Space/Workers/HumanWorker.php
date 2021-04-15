<?php

namespace App\Space\Workers;

use App\Reporting\ManageHtmlOutput;
use App\Space\Interfaces\ManageableInterface;
use App\Space\Interfaces\SleepableInterface;
use App\Space\Interfaces\WorkableInterface;

/**
 * Implements only required interfaces which are segregated.
 *
 * Class HumanWorker
 * @package App\Space\Workers
 */
class HumanWorker implements WorkableInterface, SleepableInterface, ManageableInterface
{
    private $output;

    public function __construct()
    {
        $this->output = app(ManageHtmlOutput::class);
    }

    public function work(): string
    {
        return '. Human working.';
    }

    public function sleep(): string
    {
        return ' Human sleeping.';
    }

    public function beManaged(): string
    {
        $response = self::class . $this->work() . $this->sleep();

        return $this->output->output($response);
    }
}
