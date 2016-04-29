<?php

namespace Wame\HeadControl;

use Nette\Neon\Neon;

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
	
	/**
	 * Parse neon string to array
	 * 
	 * @return array	values
	 */
	private function parse()
	{
		$seo = $this->seoRepository->get($criteria);
		
		try {
			$values = Neon::decode($seo->content);
			
			return $values;
		} catch(Nette\Neon\Exception $e) {
			$this->flashMessage($e, 'error');
		}
	}
}