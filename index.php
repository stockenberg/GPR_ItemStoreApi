<?php
/**
 * Created by PhpStorm.
 * User: mstockenberg
 * Date: 19.06.18
 * Time: 10:06
 */
header("Access-Control-Allow-Origin: *");
require_once 'vendor/autoload.php';

$app = new \classes\App();
echo json_encode($app->output());

?>
