<?php
$file = "save.txt";
$tujuan = "catatan-lama.txt";
copy($file, $tujuan);

if (!unlink($file))
{
echo "<script>alert('Error, empty notebook');document.location='pokeb.php'</script>";
}
else 
{
echo "<script>alert('successfully deleted!');document.location='pokeb.php'</script>";
}

?>