<?php


namespace core;


class Controller
{
	public function render($view,$params=[])
	{
		return Application::$app->view->renderView($view,$params);
	}
}