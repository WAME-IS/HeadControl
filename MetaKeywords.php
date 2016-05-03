<?php

namespace Wame\HeadControl;

use Wame\HeadControl\IMetaType;

class MetaKeywords extends MetaType implements IMetaType
{
	public function render() {
		return '<meta name="keywords" content="' . $this->content . '">';
	}
}