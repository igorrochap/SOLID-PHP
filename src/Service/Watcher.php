<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\AluraPlus;
use Alura\Solid\Model\Course;

class Watcher
{
    public function watchCourse(Course $curso): void
    {
        foreach ($curso->getVideos() as $video) {
            $video->watch();
        }
    }

    public function watchAluraPlus(AluraPlus $aluraPlus): void
    {
        $aluraPlus->watch();
    }
}
