<?php

namespace Wame\HeadControl\Registers\Types;

class MetaTitle extends MetaType
{
    /** @var string */
    private $content;

    
    /** {@inheritDoc} */
    public function render()
    {
        return '<title>' . 
                    ($this->content ?: $this->getPresenter()->template->siteTitle) . 
                    ($this->getPresenter()->template->subTitle ? (' - ' . $this->getPresenter()->template->subTitle) : null) . 
                    ($this->getSettingsManager()->General->siteTitle ? ' | ' . $this->getSettingsManager()->General->siteTitle : null) . 
                '</title>';
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
