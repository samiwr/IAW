<?php
	$num=$_REQUEST['point'];
	$image=imageCreate(500,500);
	$color=imagecolorallocate($image, 255, 255, 255);
	$color2=imagecolorallocate($image, 0, 100, 51);
	ImageFill($image,500,500,$color);
	for($i=0;$i<$num;$i++){
    	imagefilledellipse ($image, 200 + 60*$i, 100, 50, 50,$color2);
	}
	Header ("Content-type: image/jpeg");
	ImageJPEG ($image);
	ImageDestroy($image);
?>