<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\Scorable;

class Watcher
{
    public function watch(Scorable $content)
    {
        $content->watch();
    }
}
