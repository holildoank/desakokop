<?php

class HomeController extends BaseController {

	public function getIndex()
	{
		$data = array(
			'title'=>'Dashboard'
			);
		return View::make('home.dashboard', $data);
	}

}
