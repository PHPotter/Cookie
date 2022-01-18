<?php

namespace Potter\Cookie;

abstract class AbstractCookie implements CookieInterface
{
    abstract public function getName(): string;

    abstract public function getOptions(): array;

    abstract public function getValue(): string;

    abstract public function modify(): void;

    abstract public function set(): void;

    abstract public function setExpiry(int $expiry): void;

    abstract public function setOption(string $option, bool|int|string $value): void;

    abstract public function setOptions(array $options): void;

    abstract public function setValue(string $value): void;
}