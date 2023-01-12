<?php 
if(file_exists("files/index.html"))
	{
	echo header("Location: ./files");
}

if(file_exists("files/index.php"))
	{
	echo header("Location: ./files");
}

else{
	echo "<script>alert('Error, File index tidak ditemukan');document.location='index.php'</script>";
}
?>