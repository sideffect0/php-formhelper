<?php
	require_once("CountryCodeHelper.php");
	$e = CountryCodeHelper::as_input_select("country");
	echo $e;
?>
