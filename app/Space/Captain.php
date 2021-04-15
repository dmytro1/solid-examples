<?php

namespace App\Space;

use App\Space\Interfaces\ManageableInterface;

class Captain
{
    public function manage(ManageableInterface $worker)
    {
        return $worker->beManaged();
    }
}
