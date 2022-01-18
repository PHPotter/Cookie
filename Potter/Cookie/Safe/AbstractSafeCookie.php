<?php

namespace Potter\Cookie\Safe;

use Potter\Cookie\Cookie;

abstract class AbstractSafeCookie extends Cookie implements SafeCookieInterface
{
    abstract public function allowCrossDomain(): void;

    abstract public function allowScripting(): void;

    abstract public function blockCrossDomain(): void;

    abstract public function blockScripting(): void;

    abstract public function relaxCrossDomain(): void;

    abstract public function secure(): void;

    abstract public function setDomain(string $domain): void;

    abstract public function setPlain(): void;
}