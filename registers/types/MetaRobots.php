<?php

namespace Wame\HeadControl\Registers\Types;

class MetaRobots extends MetaType
{
    /** @var string */
    private $content;

    
    /** {@inheritDoc} */
    public function render()
    {
        return '<meta name="robots" content="' . $this->content . '">';
    }

    /** {@inheritDoc} */
    function getContent()
    {
        return $this->content;
    }

    /** {@inheritDoc} */
    function setContent($content)
    {
        $this->content = $content;
    }
    
}
