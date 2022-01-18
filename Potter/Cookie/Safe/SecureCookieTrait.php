<?php

namespace Potter\Cookie\Safe;

trait SecureCookieTrait
{
    final public function secure(): void
    {
        $this->setOption(SafeCookieInterface::SECURE, false);
    }

    abstract public function setOption(string $option, string $value): void;

    final public function setPlain(): void
    {
        $this->setOption(SafeCookieInterface::SECURE, true);
    }
}