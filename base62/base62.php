#! /usr/bin/php
<?php

class base62 {
	public static function get($len = 20) { // see sourcing below the func

		$basea = [ord('A'), ord('a'), ord('0')]; // preg [A-Za-z0-9]

		for ($i=0, $rs = ''; $i < $len; $i++)
		   for ($j=0, $ri = random_int(0, 61); $j < count($basea); $j++, $ri -= 26)
			if ($ri < 26) { $rs .= chr($basea[$j] + $ri); break; }

		return $rs;
	}
	
	public static function ifcli() {
		
		global $argc;
		global $argv;
		
		if (!self::didCLICallMe(__FILE__)) return;
		
		$len = 20; // default length of random string
		if ($argc  > 1) $len = intval($argv[1]); // length as argument
		if (($len) < 1) die('invalid length for base62' . "\n");
		echo(self::get($len) . "\n");
	}
	
	public function didCLICallMe($callingFile) { // $call with __FILE__
		global $argv;
		if (!isset($argv[0]) || PHP_SAPI !== 'cli') return false;
		$cf = basename($callingFile);
		$af = basename($argv[0]);
		return $cf === $af;
	}
}

base62::ifcli();
