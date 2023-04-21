<?php

namespace Astrotomic\Vcard\Properties;

class Custom extends Property
{
    public function __construct(protected string $custom)
    {
    }

    public function __toString(): string
    {
        return $custom;
    }
}
