<?php

namespace Potter\Cookie;

trait CookieTrait
{
    private array $options = [];
    private bool $set = false;
    private string $value;

    abstract public function getName(): string;

    final public function getOptions(): array
    {
        return $this->options;
    }

    final public function getValue(): string
    {
        if (isset($this->value))
            return $this->value;
        return array_key_exists(
            key: $name = $this->getName(),
            array: $_COOKIE
        ) ? $this->value = $_COOKIE[$name] : '';
    }

    final public function modify(): void
    {
        $this->set = setcookie(
            name: $this->getName(),
            value: $this->getValue(),
            expires_or_options: $this->getOptions()
        );
    }

    final public function set(): void
    {
        if ($this->set)
            return;
        $this->modify();
    }

    final public function setExpiry(int $expiry): void
    {
        $this->setOption('expires', $expiry);
    }

    final public function setOption(string $option, bool|int|string $value): void
    {
        $this->options[$option] = $value;
    }
    
    final public function setOptions(array $options): void
    {
        $this->options = array_merge($this->options, $options);
    }

    final public function setValue(string $value): void
    {
        $this->value = $value;
    }
    
}