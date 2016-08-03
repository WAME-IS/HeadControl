<?php

namespace Wame\HeadControl\Registers\Types;

use Wame\HeadControl\Registers\Types\IMetaType;

class MetaKeywords implements IMetaType
{

    /** @var string */
    private $content;

    public function render()
    {
        return '<meta name="keywords" content="' . $this->content . '">';
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
