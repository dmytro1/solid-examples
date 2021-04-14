<?php

namespace App\Repositories;

interface LessonRepositoryInterface
{
    /**
     * Gets all lessons.
     *
     * @return array
     */
    public function getAll(): array;
}
