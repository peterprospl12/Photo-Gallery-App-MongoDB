<?php 

class ChosenGalleryView{
    private $gallery;
    private $total_pages;

    public function __construct($gallery, $total_pages) {
        $this->gallery = $gallery;
        $this->total_pages = $total_pages;
    }
    public function render() {
        $gallery = $this->gallery;
        $total_pages = $this->total_pages;
        include '../layouts/chosengallery.php';
    }
}