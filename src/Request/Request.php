<?php

namespace GoogleTextToSpeech\Request;

abstract class Request
{
	protected $ch;
	protected $endPoint;
	protected $jsonHeader = 'Content-Type: application/json';

	abstract public function execute();

	abstract public function executeJson();

	/**
	 *
	 *
	 */
	public function __constuct($endPoint)
	{
		$this->endPoint = $endPoint;

		$this->ch = curl_init();
		curl_setopt($this->ch, CURLOPT_URL, $this->endPoint);
		curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
	}

	public function setHeader($header)
	{
		curl_setopt($this->ch, CURLOPT_HTTPHEADER, [$header]);
	}

	public function setHeaders(array $headers)
	{
		curl_setopt($this->ch, CURLOPT_HTTPHEADER, $headers);
	}
}
