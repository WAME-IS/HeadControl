<?php

namespace Wame\HeadControl\Registers;

use Wame\Core\Registers\BaseRegister;
use Wame\HeadControl\Registers\Types\IMetaType;

class MetaTypeRegister extends BaseRegister
{
    public function __construct()
    {
        parent::__construct(IMetaType::class);
    }
    
}
