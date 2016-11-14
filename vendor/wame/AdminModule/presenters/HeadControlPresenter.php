<?php

namespace App\AdminModule\Presenters;

use Wame\Core\Presenters\Traits\UseParentTemplates;


class HeadControlPresenter extends AbstractComponentPresenter
{	
    use UseParentTemplates;
    
    
    /** {@inheritDoc} */
    protected function getComponentIdentifier()
    {
        return 'HeadComponent';
    }
    
    /** {@inheritDoc} */
    protected function getComponentName()
    {
        return _('Head component');
    }
    
}
