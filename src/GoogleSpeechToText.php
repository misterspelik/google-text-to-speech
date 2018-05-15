<?php

namespace GoogleTextToSpeech;

use GoogleTextToSpeech\Config\SpeechToTextConfig;
use GoogleTextToSpeech\Google\TextSynthetize;

class GoogleTextToSpeech
{
	private $config;

	public function __construct(SpeechToTextConfig $config)
	{
		$this->config($config);
	}

	public function config(SpeechToTextConfig $config)
	{
		$this->config = $config;
	}

	public function textSynthetize($text, $options)
	{
		return TextSynthetize::perform($this->config, $text, $options);
	}

	public function voices()
	{

	}
}
