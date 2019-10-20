<?php
	$array = [13,23,9];
	$temp ='';
	function bubbleSort($array){
		for($i=0;$i<count($array);$i++){
			for($j=0;$j<count($array)-1;$j++)
				if($array[$j]>$array[$j+1]){
					$temp = $array[$j];
					$array[$j] = $array[$j+1];
					$array[$j+1] = $temp;
				}
		}
		return $array;
	}
	$result = bubbleSort($array);
	print_r($result);
?>