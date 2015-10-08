<?php
$relDir = "../../../js/global/";
$jsFiles = scandir($relDir);
foreach ($jsFiles as $file) {
	if (substr($file, 0, 1) == ".") {
		continue;
	}

	echo file_get_contents($relDir . $file);
}