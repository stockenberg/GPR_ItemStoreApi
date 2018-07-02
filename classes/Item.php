<?php
/**
 * Created by PhpStorm.
 * User: mstockenberg
 * Date: 25.06.18
 * Time: 11:50
 */

namespace classes;


class Item
{
    use Database;

    public function init()
    {
        switch ($_GET['action']){
            case 'getAll':
                return $this->getAll();
                break;
            case 'get':
                return $this->get(1);
                break;
        }
    }


    private function get($id)
    {
        return "Get item by ID";
    }

    private function getAll()
    {
        $SQL = 'SELECT * FROM items';
        return Database::get($SQL);
    }
}