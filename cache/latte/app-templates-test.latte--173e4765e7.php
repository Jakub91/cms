<?php
// source: C:\Xampp\htdocs\phalcon/app/templates/test.latte

use Latte\Runtime as LR;

class Template173e4765e7 extends Latte\Runtime\Template
{

	function main()
	{
		extract($this->params);
		?>Test<?php
		return get_defined_vars();
	}

}
