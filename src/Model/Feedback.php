<?php

namespace Alura\Solid\Model;

class Feedback
{
    private int $score;
    private ?string $feedback;

    public function __construct(int $score, ?string $feedback)
    {
        if ($score < 9 && empty($feedback)) {
            throw new \DomainException('Depoimento obrigatório');
        }
        $this->score = $score;
        $this->feedback = $feedback;
    }
}