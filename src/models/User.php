<?php
require_once '../DB.php';


class User {
    public $userLogin;
    public $userEmail;
    public $userPsw;
    private $_id;

    public function __construct($userLogin, $userEmail, $userPsw) {
        $this->userLogin = $userLogin;
        $this->userEmail = $userEmail;
        $this->userPsw = $userPsw;
    }

    public function save() {
        $response = DB::get()->users->insertOne([
            'userLogin' => $this->userLogin,
            'userEmail' => $this->userEmail,
            'userPsw' => $this->userPsw
        ]);
        $this->_id = $response->getInsertedId();
    }

    public function getLogin($userLogin) {
        $response = DB::get()->users->findOne(["userLogin" => $userLogin]);
        return $response;

    }
    
    public function __get($property) {
        if (property_exists($this, $property)) {
            $user = DB::get()->users->findOne(["userLogin" => $this->userLogin]);
            $this->_id = $user['_id'];
            return $this->$property;
        }
    }
}