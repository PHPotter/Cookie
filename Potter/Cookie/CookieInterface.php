<?php

namespace Potter\Cookie;

interface CookieInterface
{
    public function getName(): string;

    public function getOptions(): array;

    public function getValue(): string;

    public function modify(): void;

    public function set(): void;

    public function setExpiry(int $expiry): void;

    public function setOption(string $option, bool|int|string $value): void;

    public function setOptions(array $options): void;

    public function setValue(string $value): void;
}