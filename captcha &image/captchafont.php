<?php
	 session_start();
     header ("Content-type: image/png");
	 
	 // $text = rand(10000,99999); 
	 $text = substr(str_shuffle(str_repeat("abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
	 $_SESSION["vercode"] = $text;
	 $font  = 'KGMakesYouStronger.ttf';
	
     $im = imagecreate (100,30);
     $grey = imagecolorallocate ($im, 230, 230, 230);
     $black = imagecolorallocate ($im, 0, 0, 255);
   
     imagettftext($im, 20, 10, 10, 20, $black, $font,$text);
     imagepng ($im);
     //imageDestroy ($im); 
?>

