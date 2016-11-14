<?php

namespace Wame\HeadControl\Registers\Types;

use Wame\Utils\Strings;

class MetaDescription extends MetaType
{
    /** @var string */
    private $content;

    
    /** {@inheritDoc} */
    public function render()
    {
        return '<meta name="description" content="' . (Strings::truncate($this->content, 150, null) ?: $this->getSettingsManager()->General->description) . '">';
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
