<?php

namespace Wame\HeadControl\Registers\Types;

use Wame\SettingsModule\Models\SettingsManager;

abstract class MetaType
{
    /** @var BasePresenter */
    private $presenter;
    
    /** @var SettingsManager */
    private $settingsManager;
    
    
    public function __construct(SettingsManager $settingsManager)
    {
        $this->settingsManager = $settingsManager;
    }
    
    
    /**
     * Set presenter
     * 
     * @param type $presenter
     */
    public function setPresenter($presenter)
    {
        $this->presenter = $presenter;
        
        return $this;
    }
    
    /**
     * Get presenter
     * 
     * @return type
     */
    public function getPresenter()
    {
        return $this->presenter;
    }
    
    public function getSettingsManager()
    {
        return $this->settingsManager;
    }
    
}
