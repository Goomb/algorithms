<?php

class Stack
{
    public const MAX_STACK_SIZE = 100;

    public array $vault;

    public function __construct(array $stack = [])
    {
        $this->vault = $stack;
    }

    public function createStack(): void
    {
        $this->vault = [];
    }

    public function push(int|string $i): void
    {
        $this->vault[] = $i;
    }

    public function pop(): int|string
    {
        return array_pop($this->vault);
    }

    public function top(): int|string|null
    {
        return $this->isEmpty() ? null : $this->vault[count($this->vault) - 1];
    }

    public function isEmpty(): bool
    {
        return count($this->vault) === 0;
    }

    public function isFull(): bool
    {
        return count($this->vault) >= self::MAX_STACK_SIZE;
    }

    public function getSize(): ?int
    {
        return $this->isEmpty() ? null : count($this->vault);
    }
}