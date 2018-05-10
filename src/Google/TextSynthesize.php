<?php

namespace misterspelik\Google;

use misterspelik\Config\SpeechToTextConfig;
use misterspelik\Request\Post;

class TextSynthetize
{
	public static function perform(SpeechToTextConfig $config, $text, $options)
	{
		$url= $config->getTextSynthetizeEndpoint();
		$request = new Post($url);

		return $request->execute();
	}
}
