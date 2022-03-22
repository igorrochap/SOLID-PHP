<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\AluraPlus;
use Alura\Solid\Model\Course;

class ScoreCalculator
{
    public function getScore($content): int
    {
        if ($content instanceof Course) {
            return 100;
        } else if ($content instanceof AluraPlus) {
            return $content->durationMinutes() * 2;
        } else {
            throw new \DomainException('Only courses and videos of Alura+ have scores');
        }
    }
}
