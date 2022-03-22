<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\AluraPlus;
use Alura\Solid\Model\Course;
use Alura\Solid\Model\Scorable;

class ScoreCalculator
{
    public function getScore(Scorable $content): int
    {
        return "Score: " . $content->getScore();
    }
}