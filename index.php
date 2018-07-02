<?php
/**
 * Created by PhpStorm.
 * User: mstockenberg
 * Date: 19.06.18
 * Time: 10:06
 */
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET,HEAD,OPTIONS,POST,PUT");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers, Origin,Accept, X-Requested-With, Content-Type, Access-Control-Request-Method, Access-Control-Request-Headers");

// Error Reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'config.php';
require_once 'vendor/autoload.php';


$app = new \classes\App();
echo json_encode($app->output());

?>
