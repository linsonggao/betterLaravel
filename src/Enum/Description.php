<?php

namespace Lsg\BetterLaravel\Enum;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS_CONSTANT)]
class Description
{
    public function __construct(private $value = '')
    {
        $this->value = $value;
    }
}
