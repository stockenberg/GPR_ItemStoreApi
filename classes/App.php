<?php
/**
 * Created by PhpStorm.
 * User: mstockenberg
 * Date: 25.06.18
 * Time: 11:49
 */

namespace classes;


class App
{

    private $data;

    private function init()
    {
        session_name('item_store');
        session_start();

        switch ($_GET['case'] ?? ''){
            case 'user':
                $user = new User();
                return $user->init();
                break;

            case 'item':
                $item = new Item();
                return $item->init();
                break;
        }
    }


    public function output() : array
    {
        return ['status' => 'success', 'data' => $this->init()];
    }

}