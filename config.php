<?php
	//MAC OS X
	//require '/Applications/XAMPP/xamppfiles/htdocs/Smarty-3.1.14/libs/Smarty.class.php'; 
	
	//Windows
	require_once('F:/xampp/htdocs/Smarty-3.1.14/libs/Smarty.class.php');

	class Smarty_GuestBook extends Smarty { 
		function __construct() { 
			
			// Class Constructor.
			// These automatically get set with each new instance.
					
			parent::__construct (); 
			
			$this->setTemplateDir('./templates/');
			$this->setCompileDir('./templates_c/');
			$this->setConfigDir('./configs/');
			$this->setCacheDir('./cache/');
			$this->left_delimiter = "<{";
			$this->right_delimiter = "}>";
			$this->debugging = false;     //用于调试程序；
			$this->caching = false;     //缓存,
			
			//$this->caching = Smarty::CACHING_LIFETIME_CURRENT;
        	$this->assign('app_name', 'Guest Book');
		} 
	}


	//$smarty = new Smarty();
	
	
	
	 
	 /* 
	define ( '__SITE_ROOT', 'f:/xampp/htdocs/myphp' ); 
	$tpl = new Smarty ();
	$tpl->template_dir = __SITE_ROOT . "/templates/";
	$tpl->compile_dir = __SITE_ROOT . "/templates_c/";
	$tpl->config_dir = __SITE_ROOT . "/configs/";
	$tpl->cache_dir = __SITE_ROOT . "/cache/";
	$tpl->left_delimiter = '<{';
	$tpl->right_delimiter = '}>';
 */
?>