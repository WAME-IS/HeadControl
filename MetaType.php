<?php

namespace Wame\HeadControl;

class MetaType
{
	/** @var string */
	protected $content;
	
	protected $values;
	
	
	/**
	 * Set content
	 * 
	 * @param string $content	content
	 */
	public function setContent($content)
	{
		$this->content = $content;
	}
}