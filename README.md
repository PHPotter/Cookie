# SafeCookie
Open Source PHP 8 Cookie

[![Build Status](https://scrutinizer-ci.com/g/PHPotter/Cookie/badges/build.png?b=main)](https://scrutinizer-ci.com/g/PHPotter/Cookie/build-status/main)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/PHPotter/Cookie/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/PHPotter/Cookie/?branch=main)


## SafeCookie
* __construct(private string $name, string $value, int $expiry = 0)

## SafeCookieInterface

* allowCrossDomain(): void;
* allowScripting(): void;
* blockCrossDomain(): void;
* blockScripting(): void;
* relaxCrossDomain(): void;
* secure(): void;
* setDomain(string $domain): void;
* setPlain(): void;

## CookieInterface

* getName(): string;
* getOptions(): array;
* getValue(): string;
* modify(): void;
* set(): void;
* setExpiry(int $expiry): void;
* setOption(string $option, bool|int|string $value): void;
* setOptions(array $options): void;
* setValue(string $value): void;
