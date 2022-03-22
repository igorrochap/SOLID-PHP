<?php

namespace Alura\Solid\Model;

interface Scorable
{
    public function getScore(): int;
    public function watch(): void;
}