<?php
	$pattern = "/int/";
	$string = "var x = 100;";
	if (preg_match($pattern, $string)){
		echo "Match found";
		
		}
	else	{

		echo "Match not found";
		}
	

?>
