<?php

namespace App\Repositories;

use App\Models\Lesson;

class DatabaseLessonRepository implements LessonRepositoryInterface
{
    public function getAll(): array
    {
        // Be sure that return array
        return Lesson::all()->toArray();
    }
}
