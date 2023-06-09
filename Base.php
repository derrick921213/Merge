<?php
session_start();
require_once($_SESSION["Vendor_PATH"].'autoload.php');

$URLS = array(
    "avatar" => $_SESSION["userData"]["avatar"],
    "givenName" => $_SESSION['userData']['givenName'],
    "logout" => $_SESSION["LOGOUT"],
    "session" => $_SESSION,
    //定義網站URL
    "dashboard" => $_SESSION["Route-dashboard"], 
    "customers" => $_SESSION["Route-customers"],
    "orders" => $_SESSION["Route-orders"],
    "qr" => $_SESSION["Route-qr"],
    "people" => $_SESSION["Route-people"],
    "success" => $_SESSION["Route-success"], 
    "product" => $_SESSION["Route-product"], 
    //End
);

function Base(callable $fn){
    require_once($_SESSION["Config"]);
    require_once($_SESSION["Core_PATH"].'controller.Class.php');
    if (isset($_SESSION['ucode'])) {
        $Controller = new Controller($user, $passwd);
        if($_COOKIE['id']!=$_SESSION['id']){
            header('location:'.Web_Root_Path."logout.php"); 
            exit();
        }
        if ($Controller->checkUserStatus($_COOKIE["id"], $_COOKIE["sss"])) {
            if(isset($_POST["DONE"])){
                return $fn($user,$passwd,order_DONE:$_POST["DONE"]);
            }
                return $fn($user,$passwd);
        } else {
            header('location:'.Web_Root_Path."index.php");
        }
    } else {
        if(isset($_GET["token"]) || isset($_POST["token"])){
            $token = $_POST["token"] ?? $_GET["token"];
            if (basename($_SERVER['PHP_SELF']) == "orders.php"){
                return $fn($user,$passwd,data:$token,insert: false);
            }
            if (basename($_SERVER['PHP_SELF']) == "success.php"){
                return $fn($user,$passwd,data:$token);
            }
        }
        header('location:'.Web_Root_Path."index.php");
        die();
    }
}
?>