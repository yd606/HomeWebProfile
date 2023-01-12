<!doctype html>  
 <html>  
 <head>  
 <title>web_demo</title> 
  <link rel="stylesheet" type="text/css" href="style.css">  
  <link rel="icon" type="image/png" href="home.ico"/>
   
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
 <h2>Simple Web Testing <a href="cek.php" target="blank"> <button class="tmbl1"><b>Lihat_web</b></button></a></h2>
  <hr>  
 <form enctype="multipart/form-data" action="uploader.php" method="post" onsubmit="return checkSize(104857600);">  
 Pilih File Code <input  name="uploadedfile" type="file" id="fileupload" required oninvalid="this.setCustomValidity('fuck, gada file nya goblok.!')" oninput="setCustomValidity('')" />
  <input class="upload" type="submit" value="Upload File" />  
 </form><hr><br>  
   
 <table>  
 <tr>  
 <th class="thnamafile">Nama & Format File</th>  
 <th>Ukuran</th>  
 <th><a href="del.php" id="delall">Hapus</a></th>  
 </tr>  
   

 <?php  
 if ($handle = opendir('./files/'))  
 {  while (false !== ($file = readdir($handle)))  
   {  if($file!=="." && $file !=="..")  
   { echo "<tr><td id=namafile>&ensp;&rarr; $file&ensp;</td>";  
     echo "<td id=zizecolor>" . round(filesize("files/". $file)/1024) . ' KB</td>';  
     echo "<td><a href=\"hapus.php?id=$file\"><center> <button id=hapus> hapus file ini</button></center></a></td></tr>";

     }  
   }  
   closedir($handle);  
 }  
 ?>  
   
 </table>  
 <div class="info">
   <p class="p2">Upload dulu file code nya sebelum mengklik tombol <a href="cek.php" target="blank"> <button class="tmbl1"><b>Lihat_web</b></button></a></p>
  <p class="p3">Halaman Ini hanya untuk hosting web static.</p>
  <a href="del.php"> <button>Hapus Semua File</button> </a> 
</div>

 </body>  
 </html>