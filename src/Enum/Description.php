<?php

namespace Lsg\betterLaravel\Enum;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS_CONSTANT)]
class Description
{
    public function __construct(private $value = '')
    {
        $this->value = $value;
    }
}
