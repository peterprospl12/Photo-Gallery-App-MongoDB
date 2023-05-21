<?php 
require_once '../views/MainpageView.php';

class MainpageController {
    public function show() {
        return new MainpageView();
    }

}