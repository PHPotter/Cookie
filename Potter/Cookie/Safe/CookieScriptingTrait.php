<?php

namespace Potter\Cookie\Safe;

trait CookieScriptingTrait
{
    final public function allowScripting(): void
    {
        $this->setOption(SafeCookieInterface::HTTPONLY, false);
    }

    final public function blockScripting(): void
    {
        $this->setOption(SafeCookieInterface::HTTPONLY, true);
    }

    abstract public function setOption(string $option, bool|int|string $value): void;
}