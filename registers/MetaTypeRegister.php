<?php

namespace Wame\HeadControl\Registers;

use Wame\Core\Registers\BaseRegister;

class MetaTypeRegister extends BaseRegister
{
    public function __construct()
    {
        parent::__construct(Types\MetaType::class);
    }
    
}
