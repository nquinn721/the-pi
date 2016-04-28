<?php

class Json {
	private static $json;

	public static function read($url){
		$string = @file_get_contents($url);
		$json = json_decode($string, true);
		if(isset($json)){
			self::$json = $json;
			return @self;
		}
	}

	public static function get($key, $default){
		if(isset(self::$json) && isset(self::$json[$key]))
			return self::$json[$key];
		return $default;
	}
}