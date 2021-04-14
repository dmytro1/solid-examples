<?php

namespace App\Repositories;

class FilesystemLessonRepository implements LessonRepositoryInterface
{
    public function getAll(): array
    {
        // Fetch the lessons from the filesystem
        return [];
    }
}
