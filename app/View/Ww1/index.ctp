<?php
	foreach($results as $result) {
		echo '<h2>'.$result->heading.'</h2>';
		echo '<p>'.$result->title.'</p>';
		echo '<pre>';
		print_r($result);
		echo '</pre>';
		if(isset($result->imageurl)) {
			echo '<img src="'.$result->imageurl.'" height="400" />';
		}
	}
?>

