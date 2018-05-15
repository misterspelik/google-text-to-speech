<?php

namespace GoogleTextToSpeech\Config;

class SpeechToTextConfig
{
	private $endpoint = 'https://texttospeech.googleapis.com';

	private $version = 'v1beta1';

	private $textSynthetize = 'text:synthesize';

	private $voices = 'voices';

	private $key;

	public function __construct($key)
	{
		$this->key = $key;
	}

	private function sign()
	{
		return '?key='.$this->key;
	}

	public function getTextSynthetizeEndpoint()
	{
		return $this->endpoint . '/' . $this->version . '/' . $textSynthetize . $this->sign();
	}

	public function getVoicesEndpoint()
	{
		return $this->endpoint . '/' . $this->version . '/' . $voices . $this->sign();
	}
}
