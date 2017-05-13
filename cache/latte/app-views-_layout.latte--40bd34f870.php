<?php
// source: C:\Xampp\htdocs\phalcon\app\views\_layout.latte

use Latte\Runtime as LR;

class Template40bd34f870 extends Latte\Runtime\Template
{
	public $blocks = [
		'css' => 'blockCss',
		'content' => 'blockContent',
		'js' => 'blockJs',
	];

	public $blockTypes = [
		'css' => 'html',
		'content' => 'html',
		'js' => 'html',
	];


	function main()
	{
		extract($this->params);
?>
<html>
    <head>
        <title>CMS v1.0</title>
        <link rel="stylesheet" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($WEBROOT)) /* line 4 */ ?>/public/themes/core.css">
        <link rel="stylesheet" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($WEBROOT)) /* line 5 */ ?>/public/themes/web/style.css">
        <?php
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('css', get_defined_vars());
?>
    </head>
    <body>
        <?php
		$this->renderBlock('content', get_defined_vars());
		?>        <script type="text/javascript" src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($WEBROOT)) /* line 10 */ ?>/public/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($WEBROOT)) /* line 11 */ ?>/public/js/web/core.js"></script>
        <?php
		$this->renderBlock('js', get_defined_vars());
?>
    </body>
</html><?php
		return get_defined_vars();
	}


	function blockCss($_args)
	{
		
	}


	function blockContent($_args)
	{
		
	}


	function blockJs($_args)
	{
		
	}

}
