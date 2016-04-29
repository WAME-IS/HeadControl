<?php

namespace Wame\HeadControl;

use Wame\HeadControl\IMetaType;

class MetaTitle extends MetaType implements IMetaType
{
	public function render() {
		return '<title>' . $this->content . '</title>';
	}
}