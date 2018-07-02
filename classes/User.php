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
        return "Log user in";
    }

    private function logout()
    {
        return "Log user out";
    }

    private function register()
    {
        print_r($_POST);
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
