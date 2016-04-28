<?php
class JsonIndividual {
	private $json;

	function __construct($json){
		$this->json = $json;
	}

	function get($key, $default){
		if(isset($this->json) && isset($this->json[$key]) && $this->json[$key] !== '')
			return $this->json[$key];
		return $default;
	}
}
class Json {
	public static function read($url){
		$string = @file_get_contents($url);
		$json = json_decode($string, true);
		return new JsonIndividual($json);
	}

}