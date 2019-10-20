<?php
	
	$duplicates_array = [1,2,3,4,3,5,5,5,5,2,8,9,6,3,5,7,8,4,3];
	$result_array =array();
	foreach ($duplicates_array as $key => $value) {
		$result_array[$value] = $value;
	}
	echo "<pre>";
	print_r($duplicates_array);
	print_r($result_array);

?>