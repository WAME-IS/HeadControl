<?php

namespace Wame\HeadControl\Registers\Types;

class MetaRobots implements IMetaType
{
    /** @var string */
    private $content;

    
    public function render()
    {
        return '<meta name="robots" content="' . $this->content . '">';
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
