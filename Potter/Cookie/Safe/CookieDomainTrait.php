<?php

namespace Potter\Cookie\Safe;

trait CookieDomainTrait
{
    final public function allowCrossDomain(): void
    {
        $this->setOption(SafeCookieInterface::SAMESITE, 'None');
    }

    final public function blockCrossDomain(): void
    {
        $this->setOption(SafeCookieInterface::SAMESITE, 'Strict');
    }

    final public function relaxCrossDomain(): void
    {
        $this->setOption(SafeCookieInterface::SAMESITE, 'Lax');
    }

    final public function setDomain(string $domain): void
    {
        $this->setOption('domain', $domain);
    }

    abstract public function setOption(string $option, bool|int|string $value): void;
}