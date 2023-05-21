<?php 
require_once '../views/TabelsView.php';
require_once '../views/GrupaAView.php';
require_once '../views/GrupaBView.php';


class TabelsController {
    public function main() {
        return new TabelsView();
    }
    public function grupaA() {
        return new GrupaAView();
    }
    public function grupaB() {
        return new GrupaBView();
    }

}