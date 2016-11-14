<?php

namespace Wame\HeadControl\Components;

use Nette\ComponentModel\IContainer;
use Nette\DI\Container;
use Wame\Core\Components\BaseControl;
use Wame\HeadControl\Registers\MetaTypeRegister;

interface IHeadControlFactory
{
    /** @return HeadControl */
    public function create();
}

class HeadControl extends BaseControl
{
    /** @var MetaTypeRegister */
    private $metaTypeRegister;
    
    
    public function __construct(Container $container, MetaTypeRegister $metaTypeRegister, IContainer $parent = NULL, $name = NULL)
    {
        parent::__construct($container, $parent, $name);
        
        $this->metaTypeRegister = $metaTypeRegister;
        $this->hasContainer = false;
    }
    
    
    /** {@inheritDoc} */
    public function render()
    {
        $out = "";
        foreach ($this->metaTypeRegister->getAll() as $metaType) {
            $str = $metaType->setPresenter($this->getPresenter())->render();
            if ($str) {
                if ($out) {
                    $out .= "\n";
                }
                $out .= $str;
            }
        }
        echo $out;
    }

    /** {@inheritDoc} */
    protected function componentRender()
    {
        //nothing
    }
    
}
