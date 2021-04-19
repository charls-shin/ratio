<?php


namespace Controllers;


use core\Controller;

class TopController extends Controller
{
	public function top()
	{
		return $this->render('top',[
			''=>''
		]);
	}
}