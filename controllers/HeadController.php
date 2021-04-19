<?php


namespace Controllers;


use core\Application;
use core\Controller;

class HeadController extends Controller
{
	public function head()
	{
		return $this->render('head',[
			'title'=>'경쟁률'
		]);
	}
}