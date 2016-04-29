<?php

namespace Wame\HeadControl;

use Wame\Utils\Strings;
use Wame\HeadControl\IMetaType;

class MetaKeywords extends MetaType implements IMetaType
{
	public function render() {
		return '<meta name="keywords" content="' . Strings::truncate($this->content, 150, null) . '">';
	}
}