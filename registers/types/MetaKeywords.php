<?php

namespace Wame\HeadControl\Registers\Types;

class MetaKeywords extends MetaType
{
    /** @var string */
    private $content;

    
    /** {@inheritDoc} */
    public function render()
    {
        return '<meta name="keywords" content="' . ($this->content ?: $this->getSettingsManager()->General->keywords) . '">';
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
