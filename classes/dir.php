<?php

class Dir{

	public static function read($url, $cb){
		if ($handle = opendir($url)) {

			while (false !== ($entry = readdir($handle))) {
			     $cb($entry);
			}


			closedir($handle);
		}
	}
}