<?php

namespace Wame\HeadControl;

use Wame\Utils\Strings;
use Wame\HeadControl\IMetaType;

class MetaDescription extends MetaType implements IMetaType
{
	public function render() {
		return '<meta name="description" content="' . Strings::truncate($this->content, 150, null) . '">';
	}
}