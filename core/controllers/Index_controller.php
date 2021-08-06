<?php

defined('_EXEC') or die;

class Index_controller extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		global $data;
		
		$data = [
			"phone" => "+52 1 984 128 4265",
			"email" => Configuration::$vars['contact']['email'],
		];
		
		define('_title', Configuration::$web_page . ' | {$lang.home}');

		$template = $this->view->render($this, 'index');

		echo $template;
	}
	
	public function claudio()
	{
		global $data;
		
		$data = [
			"phone" => "+52 1 984 876 2215",
			"email" => "claudiocasillas@me.com",
		];
		
		define('_title', Configuration::$web_page . ' | {$lang.home}');

		$template = $this->view->render($this, 'index');

		echo $template;
	}

	public function privacy_notice()
	{
		define('_title', Configuration::$web_page . ' | {$lang.privacy_notice}');

		$template = $this->view->render($this, 'privacy_notice');

		echo $template;
	}
}
