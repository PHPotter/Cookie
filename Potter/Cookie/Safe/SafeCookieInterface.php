<?php

namespace Potter\Cookie\Safe;

use Potter\Cookie\CookieInterface;

interface SafeCookieInterface extends CookieInterface
{
    public const HTTPONLY = 'httponly';
    public const SAMESITE = 'samesite';
    public const SECURE = 'secure';

    public function allowCrossDomain(): void;

    public function allowScripting(): void;

    public function blockCrossDomain(): void;

    public function blockScripting(): void;

    public function relaxCrossDomain(): void;

    public function secure(): void;

    public function setDomain(string $domain): void;

    public function setPlain(): void;
}