<?php


function login($conn, $username)
{
    $sql = "INSERT INTO users (username)
          VALUES ('$username')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function view_login() {
    $content = "views/user/login.php";
    require_once "views/layout.php";
}
