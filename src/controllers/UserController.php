<?php
require_once '../models/User.php';
require_once '../views/UserRegisterView.php';
require_once '../views/UserLoginView.php';
require_once '../views/RedirectView.php';
require_once '../views/MainpageView.php';



class UserController {
    public function register(){
        if (isset($_SESSION['user_id'])) {
            return new RedirectView('/', 303);
        }
        else{
            return new UserRegisterView();
        }    }
    
    public function login(){
        if (isset($_SESSION['user_id'])) {
            return new RedirectView('/', 303);
        }
        else{
            return new UserLoginView();
        }
    }

    public function add(){
        $userLogin = $_POST['login'];
        $userEmail = $_POST['email'];
        $userPsw = $_POST['psw'];
        $userPswRepeat = $_POST['psw-repeat'];
        
        if($userPsw === $userPswRepeat) {
            $hashPsw = password_hash($userPsw, PASSWORD_DEFAULT);
            $user = new User($userLogin, $userEmail, $hashPsw);
            if($user->getLogin($userLogin) === null){
                $user->save();
                return new RedirectView('/user/login', 303);

            }
            else {
                echo("<script>alert('Login jest już zajety')</script>");
                return new UserRegisterView();
            }
        }
        else {
            echo("<script>alert('Hasła nie są takie same')</script>");
            return new UserRegisterView();
        }
    }

    public function verify() {
        $userLogin = $_POST['login'];
        $userPsw = $_POST['psw'];
        $user = new User($userLogin, null ,$userPsw);
        $response = $user->getLogin($userLogin);
        if($response !== null && password_verify($userPsw, $response['userPsw'])){
            session_regenerate_id();
            $_SESSION['user_id'] = $user->_id;
            echo("<script>alert('Pomyślnie zalogowano')</script>");
            return new MainpageView;
        }
        else {
            echo("<script>alert('Niepoprawne dane logowania')</script>");
            return new UserLoginView();
        }
    }

    public function logout() {
        unset($_SESSION['user_id']);
        session_destroy();
        if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time()-42000, '/');
        }
        return new RedirectView('/user/login', 303);
    }
   
}