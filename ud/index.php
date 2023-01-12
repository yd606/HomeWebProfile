<!doctype html>  
 <html>  
 <head>  
 <title>Upload Download File</title>  
  <link rel="stylesheet" type="text/css" href="style.css">  
  
   
 <script type="text/javascript">  
 function checkSize(max_img_size)  
 {  var input = document.getElementById("fileupload");  
   if(input.files && input.files.length == 1)  
   {  if (input.files[0].size > max_img_size)   
     { alert("Ukuran file harus di bawah "   
          + (max_img_size/102400/102400) + " MB");  
       return false;  
     }  
   }  
   return true;  
 }  
 </script>  
 </head>  
   
 <body bgcolor="black">  
 <h2>Selamat Datang Di Form Upload & Download File !!</h2> <hr>  
 <form enctype="multipart/form-data" action="uploader.php" method="post" onsubmit="return checkSize(104857600);">  
 Pilih File Yang Ingin di Simpan <input name="uploadedfile" type="file" id="fileupload" required oninvalid="this.setCustomValidity('fuck, gada file nya goblok.!')" oninput="setCustomValidity('')" />  
 <input type="submit" value="Upload File" />  
 </form><hr>  
   
 <table>  
 <tr>  
 <th>File Name</th>  
 <th>Upload Date</th>  
 <th>Type</th>  
 <th>Size</th>  
 <th>Delete</th>  
 </tr>  
   
 <?php  
 if ($handle = opendir('./files/'))  
 {  while (false !== ($file = readdir($handle)))  
   {  if($file!=="." && $file !=="..")  
   {  echo "<tr><td><a href=\"download.php?id=" . urlencode($file). "\">$file</a></td>";  
     echo "<td>" . date ("d/m/Y H:m:s", filemtime("files/".$file)) . '</td>';  
     echo "<td>" . pathinfo("files/".$file, PATHINFO_EXTENSION) . ' file </td>';  
     echo "<td>" . round(filesize("files/".$file)/1024) . ' KB</td>';  
     echo "<td><a href=\"hapus.php?id=$file\">hapus</a></td></tr>";  
     }  
   }  
   closedir($handle);  
 }  
 ?>  
   
 </table>  
 </body>  
 </html>