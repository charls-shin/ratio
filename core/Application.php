<?php


namespace core;
use models\Apply;
use models\Info;

class Application
{
	public static $root_dir;
	public static $app;
	public $controller=null;
	public $view;
	public $apply;
	public $info;
	protected $controllMap=[];

	public function __construct(string $root_dir,array $config)
	{
		self::$root_dir=$root_dir;
		self::$app = $this;

		$this->view=new View();
		$this->apply=new Apply($config);
		$this->info=new Info($config);
	}

	public function run()
	{
		echo $this->view->printContent();
	}

	public function setControlls($callback)
	{
		$this->controllMap[]=$callback;
	}

	public function printContent()
	{
		$html='';
		foreach ($this->controllMap as $callback)
		{
			$controller = new $callback[0];
			self::$app->controller = $controller;
			$callback[0] = $controller;
			$html=call_user_func($callback);
		}
		echo $html;
	}
}