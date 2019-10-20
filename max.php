<?php
	$array_Values = array(1,2,4,6,4,34,56,23,6,523,45,678,23,234,34);
	$max = 0;
	foreach ($array_Values as $key => $value) {
		if($max<$value){
			$max = $value;
		}
	}
	echo $max;
?>