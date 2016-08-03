<?php

namespace Wame\HeadControl\Registers\Types;

use Wame\HeadControl\Registers\Types\IMetaType;
use Wame\Utils\Strings;

class MetaDescription implements IMetaType
{

    /** @var string */
    private $content;

    public function render()
    {
        return '<meta name="description" content="' . Strings::truncate($this->content, 150, null) . '">';
    }

    function getContent()
    {
        return $this->content;
    }

    function setContent($content)
    {
        $this->content = $content;
    }
}
