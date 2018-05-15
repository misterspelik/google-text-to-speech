<?php

namespace GoogleTextToSpeech\Request;

class Post extends Request
{
	public function execute($data)
	{
		curl_setopt($this->ch, CURLOPT_POSTFIELDS, $data);
		$result = curl_exec($this->ch);
		curl_close($this->ch);

		return $result;
	}

	public function executeJson($data)
	{
		$this->setHeader($this->jsonHeader);

		return json_decode($this->execute($data));
	}
}
