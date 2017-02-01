<?php
	
	$res=0;
	if (! $res && file_exists("../main.inc.php")) $res=@include("../main.inc.php");			// to work if your module directory is into dolibarr root htdocs directory
	if (! $res) die("Include of main fails");
