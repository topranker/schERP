<?php
	$marks = array(
		"Boby" => array(
			'se' => 50,
			'sad'=> 90,
			'vb' => 87
		),
		"Arun" => array(
			'se' => 45,
			'sad'=> 67,
			'vb' => 68
		)
	);
	
	$keys = array_keys($marks);

	for($i=0; $i<count($marks); $i++){
		echo $keys[$i] . "{<br>";
		foreach($marks[$keys[$i]] as $ikey => $ivalue){
			echo $ikey . " : " . $ivalue . "<br>";
		}
		echo "} <br>";
	}

?>