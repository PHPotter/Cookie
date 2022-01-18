<?php

namespace Potter\Cookie\Safe;

final class SafeCookie extends AbstractSafeCookie
{
    use CookieDomainTrait, CookieScriptingTrait, SecureCookieTrait;

    public function __construct(private string $name, string $value, int $expiry = 0)
    {
        $this->setValue($value);
        $this->setExpiry($expiry);
        $this->matchProtocol();
        $this->blockCrossDomain();
        $this->blockScripting();
        $this->set();
    }

    public function getName(): string
    {
        return $this->name;
    }

    private function matchProtocol(): void
    {
        if (!isset($_SERVER['HTTPS']) || empty($_SERVER['HTTPS']))
        {
            $this->setPlain();
            return;
        }
        $this->secure();
    }
}