<?php

namespace Potter\Cookie\Safe;

trait SecureCookieTrait
{
    final public function secure(): void
    {
        $this->setOption(SafeCookieInterface::SECURE, true);
    }

    abstract public function setOption(string $option, bool|int|string $value): void;

    final public function setPlain(): void
    {
        $this->setOption(SafeCookieInterface::SECURE, false);
    }
}