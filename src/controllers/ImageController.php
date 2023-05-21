<?php
require_once '../models/Images.php';
require_once '../views/AddImageView.php';
require_once '../views/GalleryView.php';
require_once '../views/RedirectView.php';
require_once '../views/ChosenGalleryView.php';
require_once '../business/Watermark.php';
require_once '../business/Miniature.php';




class ImageController {
    public function new(){
        return new AddImageView();
    }

    public function search(){
        return new SearchView();
    }
    

    public function add(){
        $watermarkText = $_POST['watermarkText'];
        $author = $_POST['author'];
        $title = $_POST['title'];

        
        $allowed = array('jpg', 'png');
        
        
        $file = $_FILES['file'];
        $fileType = $file['type'];
        $fileName = $file['name'];
        $fileSize = $file['size'];
        $fileTmpName = $file['tmp_name'];
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $fileNameNew = uniqid('', true).".".$fileActualExt;
        
        if(in_array($fileActualExt, $allowed)) {
            if($fileSize < (1024*1024)) {
                $fileDestination = 'images/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                $BigImageName = $fileNameNew;
                
                $miniature = new Miniature($fileActualExt, $BigImageName);
                $watermark = new Watermark($fileActualExt, $BigImageName, $watermarkText);

                $SmallImageName = $miniature->create_miniature();
                $WatermarkImageName = $watermark->create_watermark();

                $post = new Images($watermarkText, $SmallImageName, $WatermarkImageName, $author, $title);
                $post->save();
        
                return new RedirectView('/form/new', 303);
            }
            else{
                echo("<script>alert('Plik jest za duży')</script>");
                return new AddImageView();
            }
        }
        else{
            if($fileSize < (1024*1024)) {
                echo("<script>alert('Plik ma niepoprawny format')</script>");
                return new AddImageView();
            }
            else {
                echo("<script>alert('Plik jest za duży i ma niepoprawny format')</script>");
                return new AddImageView();

            }
        }

    }

    public function index() {
        $records_per_page = 4;

        if (isset($_GET['page'])) {
            $page = (int)$_GET['page'];
        } 
        else {
            $page = 1;
        }

        $gallery = Images::getAll($page, $records_per_page);

        $total_records = Images::galleryCount();

        $total_pages = ceil($total_records / $records_per_page);

        return new GalleryView($gallery, $total_pages);
  }

  public function chosen(){
    $records_per_page = 4;
  
    if (isset($_GET['page'])) {
        $page = (int)$_GET['page'];
    } 
    else {
        $page = 1;
    }
    $gallery = Images::getSpecific($page, $records_per_page);
    $total_records = count($_SESSION['cart']);
    $total_pages = ceil($total_records / $records_per_page);
  
    return new ChosenGalleryView($gallery, $total_pages);
  }
    public function remember(){
        if (isset($_POST['cart'])) {
            $choosen_images = $_POST['cart'];
            
            foreach ($choosen_images as $item) {
                $_SESSION['cart'][] = $item;
            }
        }
        return new RedirectView('/gallery', 303);
    }

    public function forget() {
        if (isset($_POST['cart'])) {
          $choosen_images = $_POST['cart'];
          $_SESSION['cart'] = array_diff($_SESSION['cart'], $choosen_images);
        }
        return new RedirectView('/gallery/chosen', 303);
      }
      
   
}