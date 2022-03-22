<?php

namespace Alura\Solid\Model;

class Course
{
    private string $name;
    private array $videos;
    private array $feedbacks;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->videos = [];
        $this->feedbacks = [];
    }

    public function receiveFeedback(Feedback $feedback): void
    {
        $this->feedbacks[] = $feedback;
    }

    public function addVideo(Video $video): void
    {
        if ($video->durationMinutes() < 3) {
            throw new \DomainException('Video too short');
        }

        $this->videos[] = $video;
    }

    /** @return Video[] */
    public function getVideos(): array
    {
        return $this->videos;
    }
}
