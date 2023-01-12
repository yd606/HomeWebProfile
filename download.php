<?php 
$url        =   '<a class="vglnk" href="https://evilzone.org/challenges/trusted_parameter/index.php" rel="nofollow"><span>https</span><span>://</span><span>evilzone</span><span>.</span><span>org</span><span>/</span><span>challenges</span><span>/</span><span>trusted</span><span>_</span><span>parameter</span><span>/</span><span>index</span><span>.</span><span>php</span></a>'; 
$file_name  =   basename($url); 
 
//save the file by using base name 
if(file_put_contents( $file_name,file_get_contents($url))){
    echo "File downloaded successfully!"; 
}else{
    echo "File downloading failed!"; 
}
?>