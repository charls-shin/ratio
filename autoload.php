<?php
spl_autoload_register(function($className){

	$vendorDir = dirname(__FILE__);
	$className=strtr($className, '\\', DIRECTORY_SEPARATOR);

	$path = $vendorDir.'/'.$className. ".php";
	if(file_exists($path)) {
		require_once($path);
	} else {
		echo "File $path is not found.";
	}
});
