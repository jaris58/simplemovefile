<?php
$dir = 'assets';
$dirProcessed = 'assets-processed';

if (is_dir($dir)) {
	$scanned_directory = array_diff(scandir($dir), array('..', '.'));
	
	foreach ($scanned_directory as $key => $value) {
		rename($dir . '\/' . $value, $dirProcessed . '\/' . $value);
	}
}