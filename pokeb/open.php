<?php 
if(file_exists("save.txt")){
	echo header("Location: save.txt");
}else{
	echo "<script>alert('Error empty notebook, write now!!!');document.location='pokeb.php'</script>";
}
?>