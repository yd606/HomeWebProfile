<?php
		
		header("Location: index.php");
		
		$files = glob ('files/*');
		
		foreach ($files as $file) {
		
			if (is_file($file)) 
		
			unlink($file);
		
		}
?>