<?php
require_once "startup.php";
require_once "controllers/UserController.php";

if(isset($_GET['page'])) {
    $page = $_GET['page'];

    if($page == "auth") {
        $username = $_POST['username'];
        login($conn, $username);
    }
}

view_login();
