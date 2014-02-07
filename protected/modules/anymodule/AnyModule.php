<?php
class AnyModule extends CWebModule
{
	public function init()
	{
		$this->setImport(array(
			'anymodule.components.*',
		));
	}
}
