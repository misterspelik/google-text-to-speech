<?php

namespace GoogleTextToSpeech\Google;

use GoogleTextToSpeech\Config\SpeechToTextConfig;
use GoogleTextToSpeech\Request\Post;

class TextSynthetize
{
	public static function perform(SpeechToTextConfig $config, $text, $options)
	{
		$url= $config->getTextSynthetizeEndpoint();
		$post = new Post($url);

		return $post->execute($config->toJson());
	}
}
