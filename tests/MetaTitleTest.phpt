<?php

// _____ ___  ___ _____ 
//|_   _/ __)( __/_   _/
//  |_| \___ /___) |_|  

namespace Wame\HeadControl\Tests;

use Wame\HeadControl\MetaTitle;

class MetaTitleTest extends \Tester\TestCase
{
    /** @var HeadControl @inject */
	public $headControl;

    public function testRender()
    {
		$component = $this->headControl;
		
		$metaTitle = $component->getType(MetaTitle);
		$metaTitle->setContent('Nadpis');

        // Assert
        $this->assertEquals('<title>Nadpis</title>', $metaTitle->render());
    }
}