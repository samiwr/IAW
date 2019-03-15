<?php
	$width=250;
	$height=150;
	$image=imageCreate($width,$height);
	$yellow=ImageColorAllocate($image,255,255,0);
	ImageFill($image,0,0,$yellow);
	$red=ImageColorAllocate($image,255,0,0);
	$text="ACT-34";
	ImageString($image,35,25,35,$text,$red);
	Header ("Content-type: image/jpeg");
	ImageJPEG ($image);
	ImageDestroy($image);
?>
