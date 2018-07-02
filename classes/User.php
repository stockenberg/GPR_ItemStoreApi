<?php
/**
 * Created by PhpStorm.
 * User: mstockenberg
 * Date: 19.06.18
 * Time: 11:32
 */

namespace classes;

class User
{
    use Database;

    public function init()
    {
        switch ($_GET['action']){
            case 'login':
                return $this->login();
                break;

            case 'logout':
                return $this->logout();
                break;

            case 'register':
                return $this->register();
                break;

            case 'addToCart':
                return $this->addToCart();
                break;

            case 'buy':
                return $this->buy();
                break;
        }
    }

    private function login()
    {
        $post = json_decode($_POST['data'], true);

        if(!empty($post)){
            $SQL = 'SELECT * FROM users WHERE email = :email';
            $execArr = [':email' => $post['username']];

            $res = Database::get($SQL, $execArr);

            if(password_verify($post['password'], $res[0]['password'])){
                return ['userid' => $res[0]['id']];
            }
        }
        //return "Log user in";
    }

    private function logout()
    {
        return "Log user out";
    }

    private function register()
    {
        $post = json_decode($_POST["data"], true);
        if(!empty($post)){
            $SQL = "INSERT INTO users (firstname, lastname, email, password) VALUES (:firstname, :lastname, :email, :password)";
            $execArr = [
                ':firstname' => $post['firstname'],
                ':lastname' => $post['lastname'],
                ':email' => $post['email'],
                ':password' => password_hash($post['password'], PASSWORD_DEFAULT, ['cost' => 12]),
            ];

            if (Database::set($SQL, $execArr)){
                return "funzt!";
            }
        }
    }

    private function addToCart()
    {
        return "add item to cart";
    }

    private function buy()
    {
        return "buy all items in cart";
    }

}
