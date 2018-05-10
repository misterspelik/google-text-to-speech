<?php

namespace misterspelik\Config;

class TextSynthetizeOptions
{
	private $body;

	public function __construct()
	{
		$this->body = (object) [
			'input' => new stdClass(),
			'voice' => new stdClass(),
			'audioConfig'=> new stdClass(),
		];
	}

	public function setInput($input)
	{
		$this->body->input = $input;
	}

	public function setVoice($voice)
	{
		$this->body->voice = $voice;
	}

	public function setAudioConfig($config)
	{
		$this->body->audioConfig = $config;
	}

	public function setText($text)
	{
		$this->body->input->text = $text;
	}

	public function toJson()
	{
		return json_encode($this->body);
	}
}
