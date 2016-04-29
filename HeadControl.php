<?php

namespace Wame\HeadControl;

use Wame\HeadControl\IMetaType;
use Wame\HeadControl\Exceptions\WrongMetaTypeException;

class HeadControl extends \Nette\Application\UI\Control
{	
	/** @var array */
	private $heads = [];
	
	/**
	 * Get type
	 * 
	 * @param IMetaType $type					MetaType
	 * @return \Wame\MetaControl\MetaControl	MetaType
	 * @throws WrongMetaTypeException			
	 */
	public function getType($type)
	{
		// TODO: otestovat ci funguje overenie spravne
		if($type instanceof IMetaType) {
			$this->heads[get_class($type)] = $type;
			return $type;
		} else {
			throw new WrongMetaTypeException('MetaType doesnt implements IMetaType');
		}
	}
	
	/**
	 * Render
	 */
	public function render()
	{
		$array = [];
		
		foreach($this->heads as $head) {
			$array[] = $head->render();
		}
		
		echo implode("\n", $array);
	}
	
}