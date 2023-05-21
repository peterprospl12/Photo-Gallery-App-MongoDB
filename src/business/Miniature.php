<?php 

class Miniature {
    public $fileActualExt;
    public $BigImageName;
    
    public function __construct($fileActualExt, $BigImageName) {
        $this->fileActualExt = $fileActualExt;
        $this->BigImageName = $BigImageName;
    }

    public function create_miniature(){
        if($this->fileActualExt == 'jpg'){
            $copyImage = imagecreatefromjpeg('images/'.$this->BigImageName);
        }
        else {
            $copyImage = imagecreatefrompng('images/'.$this->BigImageName);
        }
        $smallImage = imagecreatetruecolor(200, 125);
        
        imagealphablending( $smallImage, false ); 
        imagesavealpha( $smallImage, true ); 


        imagecopyresampled($smallImage, $copyImage, 0, 0, 0, 0, 200, 125, imagesx($copyImage), 
        imagesy($copyImage));
        $SmallImageName = 'Small'.$this->BigImageName;
        if($this->fileActualExt == 'jpg'){
            imagejpeg($smallImage, 'images/'.$SmallImageName, 100);
        }
        else {
            imagepng($smallImage, 'images/'.$SmallImageName, 0);
        }

        return $SmallImageName;
    }
}