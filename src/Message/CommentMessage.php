<?php

namespace App\Message;

final class CommentMessage
{
    private $id;
    private $context;
    private $reviewUrl;

    public function __construct(int $id, string $reviewUrl, array $context = [])
    {
        $this->id = $id;
        $this->reviewUrl = $reviewUrl;
        $this->context = $context;
    }

    public function getReviewUrl(): string
    {
        return $this->reviewUrl;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getContext(): array
    {
        return $this->context;
    }
}
