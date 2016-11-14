<?php

namespace Wame\HeadModule\Vendor\Wame\ComponentModule;

use Nette\Application\LinkGenerator;
use Wame\HeadControl\Components\IHeadControlFactory;
use Wame\ComponentModule\Registers\IComponent;
use Wame\MenuModule\Models\Item;

class HeadComponent implements IComponent
{
    /** @var LinkGenerator */
    private $linkGenerator;

    /** @var IHeadControlFactory */
    private $IHeadControlFactory;

    
    public function __construct(
        LinkGenerator $linkGenerator, IHeadControlFactory $IHeadControlFactory
    ) {
        $this->linkGenerator = $linkGenerator;
        $this->IHeadControlFactory = $IHeadControlFactory;
    }

    public function addItem()
    {
        $item = new Item();
        $item->setName($this->getName());
        $item->setTitle($this->getTitle());
        $item->setDescription($this->getDescription());
        $item->setLink($this->getLinkCreate());
        $item->setIcon($this->getIcon());

        return $item->getItem();
    }

    public function getName()
    {
        return 'head';
    }

    public function getTitle()
    {
        return _('Head');
    }

    public function getDescription()
    {
        return _('Create head component');
    }

    public function getIcon()
    {
        return 'fa fa-ban';
    }

    public function getLinkCreate()
    {
        return $this->linkGenerator->link('Admin:HeadControl:create');
    }

    public function getLinkDetail($componentEntity)
    {
        return $this->linkGenerator->link('Admin:HeadControl:edit', ['id' => $componentEntity->id]);
    }

    public function createComponent()
    {
        $control = $this->IHeadControlFactory->create();
        return $control;
    }
    
}
