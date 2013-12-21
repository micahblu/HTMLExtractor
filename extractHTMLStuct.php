#!/usr/bin/php
<?php
/**
 * Extract the HTML Structure from an HTML Document
 *
 * @version 0.1.0
 * @author Micah Blu
 * @license GNU
 */

$file = $argv[1];

if(!file_exists($file)){
	echo $file . ' does not exist\n';
	exit;
}

$lines = file($file);

foreach($lines as $line){
	echo $line . "\n";
}