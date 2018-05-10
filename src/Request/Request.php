<?php

namespace misterspelik\Request;

abstract class Request
{
	protected $ch;
	protected $endPoint;

	abstract public function execute();

	public function __constuct($endPoint)
	{
		$this->endPoint = $endPoint;
	}
}
