<?php

namespace App\Http;

class Response
{
	protected $view;

	public function __construct($view)
	{
		$this->view = $view;
	}

	private function getView()
	{
		return $this->view;
	}

	public function send()
	{
		$view = $this->getView();
		$content = file_get_contents(__DIR__ . "/../../views/$view.php");
		require viewPath('layout');
	}
}
