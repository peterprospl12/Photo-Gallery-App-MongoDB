<?php
require_once '../DB.php';


class Images {
    public $watermarkText;
    public $SmallImageName;
    public $WatermarkImageName;
    public $author;
    public $title;
    private $_id;

    public function __construct($watermarkText, $SmallImageName, $WatermarkImageName, $author, $title) {
        $this->watermarkText = $watermarkText;
        $this->SmallImageName = $SmallImageName;
        $this->WatermarkImageName = $WatermarkImageName;
        $this->author = $author;
        $this->title = $title;

    }

    public function save() {
        $response = DB::get()->gallery->insertOne([
            'watermarkText' => $this->watermarkText,
            'SmallImageName' => $this->SmallImageName,
            'WatermarkImageName' => $this->WatermarkImageName,
            'author' => $this->author,
            'title' => $this->title
        ]);
        $this->_id = $response->getInsertedId();
    }

    public static function getAll($page, $records_per_page) {
      $start_from = ($page - 1) * $records_per_page;
      $response = DB::get()->gallery->find([], ['skip' => $start_from, 'limit' => $records_per_page]);
      return $response;
    }

    public static function galleryCount(){
        return DB::get()->gallery->count();
    }

    public static function getSpecific($page, $records_per_page) {
        if (empty($_SESSION['cart'])) {
            return [];
          }
        
          $start_from = ($page - 1) * $records_per_page;
        $filters = [];
        
        foreach ($_SESSION['cart'] as $photo) {
            $filters[] = ["_id" => new \MongoDB\BSON\ObjectId($photo)];
        }
        
        $filter = ['$or' => $filters];
        $response = DB::get()->gallery->find($filter, ['skip' => $start_from, 'limit' => $records_per_page]);
       
        return $response->toArray();
      }

    public static function getTitleImage($title) {
        $response = DB::get()->gallery->find(["title" => $title]);
        return $response;

    }

    public function __get($property) {
        if (property_exists($this, $property)) {
            $photo = DB::get()->gallery->findOne(["SmallImageName" => $this->SmallImageName]);
            $this->_id = $photo['_id'];
            return $this->$property;
        }
    }
}