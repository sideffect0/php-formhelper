<?php
	require_once("CountryCodeHelper.php");
	$e = CountryCodeHelper::dump_as_input_select("country");
	echo $e;
?>
