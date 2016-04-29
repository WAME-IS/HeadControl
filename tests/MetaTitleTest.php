<?php

namespace Wame\HeadControl\Tests;



// _____ ___  ___ _____ 
//|_   _/ __)( __/_   _/
//  |_| \___ /___) |_|  


use Wame\HeadControl\MetaTitle;

class MetaTitleTest extends PHPUnit_Framework_TestCase
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