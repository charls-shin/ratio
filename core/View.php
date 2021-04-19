<?php


namespace core;


class View
{
	public $layoutContent='';
	public $layout = 'ratio';

	public function setLayout($layout)
	{
		$this->layout=$layout;
	}

	public function renderView($view,$params = [])
	{
		$layoutContent=$this->layoutContent();
		$viewContent=$this->bodyContent($view,$params);
		return str_replace("{{{$view}}}",$viewContent,$this->layoutContent);
	}

	public function layoutContent()
	{
		$layout=$this->layout;
		ob_start();
		include_once Application::$root_dir."/views/layouts/$layout.php";
		return ob_get_clean();
	}

	public function bodyContent($view,$params)
	{
		foreach( $params as $key=>$value ){
			$$key=$value;
		}
		ob_start();
		include_once Application::$root_dir."/views/$view.php";
		return ob_get_clean();
	}
}