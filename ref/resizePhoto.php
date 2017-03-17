<?php
// get width and height of original image
list($imageWidth,$imageHeight)=getimagesize($IMG_LARGE_PATH_IMGNAME);
    if($imageWidth>$imageHeight||$imageWidth==$imageHeight){
            if($imageWidth>300&&$imageWidth<540){$IMG_LARGE_WIDTH=300;$IMG_LARGE_HEIGHT=($imageHeight/$imageWidth)*$IMG_LARGE_WIDTH;$IMG_LARGE_HEIGHT=round($IMG_LARGE_HEIGHT);}
        elseif($imageWidth>=540){                $IMG_LARGE_WIDTH=540;$IMG_LARGE_HEIGHT=($imageHeight/$imageWidth)*$IMG_LARGE_WIDTH;$IMG_LARGE_HEIGHT=round($IMG_LARGE_HEIGHT);}
    }
elseif($imageWidth<$imageHeight){
            if($imageHeight>250&&$imageHeight<480){$IMG_LARGE_HEIGHT=250;$IMG_LARGE_WIDTH=($imageWidth/$imageHeight)*$IMG_LARGE_HEIGHT;$IMG_LARGE_WIDTH=round($IMG_LARGE_WIDTH);}
        elseif($imageHeight>=480){                 $IMG_LARGE_HEIGHT=250;$IMG_LARGE_WIDTH=($imageWidth/$imageHeight)*$IMG_LARGE_HEIGHT;$IMG_LARGE_WIDTH=round($IMG_LARGE_WIDTH);}
    }

$newImageThumb=imagecreatetruecolor($IMG_THUMB_WIDTH_90,$IMG_THUMB_HEIGHT_90);
$newImageLarge=imagecreatetruecolor($IMG_LARGE_WIDTH,$IMG_LARGE_HEIGHT);
    if($clientFileExtension=="jpg"||$clientFileExtension=="JPG"||$clientFileExtension=="jpeg"||$clientFileExtension=="JPEG"){$imageSource=imagecreatefromjpeg($IMG_LARGE_PATH_IMGNAME);}
elseif($clientFileExtension=="gif"||$clientFileExtension=="GIF"){$imageSource=imagecreatefromgif($IMG_LARGE_PATH_IMGNAME);}
elseif($clientFileExtension=="bmp"||$clientFileExtension=="BMP"){$imageSource=imagecreatefromwbmp($IMG_LARGE_PATH_IMGNAME);}
elseif($clientFileExtension=="png"||$clientFileExtension=="PNG"){$imageSource=imagecreatefrompng($IMG_LARGE_PATH_IMGNAME);}
imagecopyresampled($newImageThumb,$imageSource,0,0,0,0,$IMG_THUMB_WIDTH_90,$IMG_THUMB_HEIGHT_90,$imageWidth,$imageHeight);
imagecopyresampled($newImageLarge,$imageSource,0,0,0,0,$IMG_LARGE_WIDTH,$IMG_LARGE_HEIGHT,$imageWidth,$imageHeight);
imagejpeg($newImageThumb,$IMG_THUMB_PATH_IMGNAME,100);
imagejpeg($newImageLarge,$IMG_LARGE_PATH_IMGNAME,100);
imagedestroy($newImageThumb);
imagedestroy($newImageLarge);imagedestroy($imageSource);
?>