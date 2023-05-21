<?php 

class Watermark {
    public $fileActualExt;
    public $BigImageName;
    public $watermarkText;
    
    public function __construct($fileActualExt, $BigImageName, $watermarkText) {
        $this->fileActualExt = $fileActualExt;
        $this->BigImageName = $BigImageName;
        $this->watermarkText = $watermarkText;
    }

    public function create_watermark(){
        if($this->fileActualExt == 'jpg'){
            $copyImage = imagecreatefromjpeg('images/'.$this->BigImageName);
        }
        else {
            $copyImage = imagecreatefrompng('images/'.$this->BigImageName);
        }
        $watermarkImage = imagecreatetruecolor(imagesx($copyImage) ,imagesy($copyImage));
        
        imagealphablending( $watermarkImage, false ); 
        imagesavealpha( $watermarkImage, true );
        
        imagecopyresampled($watermarkImage, $copyImage, 0, 0, 0, 0, 
        imagesx($copyImage), imagesy($copyImage),imagesx($copyImage), imagesy($copyImage));
        $blue = imagecolorallocate($watermarkImage, 0, 0, 255);
        $font = 'static/font/ARIALBD.TTF';

        imagettftext($watermarkImage, imagesx($copyImage)/10, 30, imagesx($copyImage)/4 , imagesy($copyImage), 
        $blue, $font, $this->watermarkText);

        $WatermarkImageName = 'WMark'.$this->BigImageName;
        if($this->fileActualExt == 'jpg'){
            imagejpeg($watermarkImage, 'images/'.$WatermarkImageName, 100);
        }
        else {
            imagepng($watermarkImage, 'images/'.$WatermarkImageName, 0);

        }
        return $WatermarkImageName;
    }
}