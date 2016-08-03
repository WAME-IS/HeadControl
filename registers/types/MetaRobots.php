<?php

namespace Wame\HeadControl\Registers\Types;

class MetaRobots implements IMetaType
{

    /** @var string */
    private $content;

    public function render()
    {
        return '<title>' . $this->content . '</title>';
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
