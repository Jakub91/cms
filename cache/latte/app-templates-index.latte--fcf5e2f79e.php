<?php
// source: C:\Xampp\htdocs\phalcon/app/templates/index.latte

use Latte\Runtime as LR;

class Templatefcf5e2f79e extends Latte\Runtime\Template
{
	public $blocks = [
		'css' => 'blockCss',
		'js' => 'blockJs',
		'content' => 'blockContent',
	];

	public $blockTypes = [
		'css' => 'html',
		'js' => 'html',
		'content' => 'html',
	];


	function main()
	{
		extract($this->params);
?>

<?php
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('css', get_defined_vars());
		$this->renderBlock('js', get_defined_vars());
?>

<?php
		$this->renderBlock('content', get_defined_vars());
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		$this->parentName = '_layout.latte';
		
	}


	function blockCss($_args)
	{
		
	}


	function blockJs($_args)
	{
		
	}


	function blockContent($_args)
	{
		extract($_args);
		?>    <img src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($WEBROOT)) /* line 7 */ ?>/images/thumb/2/1.jpg" alt="">
    <img src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($WEBROOT)) /* line 8 */ ?>/images/main/2/1.jpg" alt="">
    <img src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($WEBROOT)) /* line 9 */ ?>/images/main-test/2/1.jpg" alt="">
<?php
	}

}
