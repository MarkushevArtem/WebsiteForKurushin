
<?php
require 'db.php';
    if(!empty($_POST))
    {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $table_name = "data";
        $sqlLogin ="SELECT userIndex FROM $table_name WHERE userLogin = '$login';";
        $resultLogin = $db->query($sqlLogin);
        $valueLogin = $resultLogin->fetch_array();
        if(!empty($valueLogin))
        {
            $sqlPassword ="SELECT userIndex FROM $table_name WHERE userLogin = '$login' AND userPassword = '$password';";
            $resultPassword = $db->query($sqlPassword);
            $valuePassword = $resultPassword->fetch_array();
            if (!empty($valuePassword))
            {
                include 'main.html';
            }
            else
            {
            include 'index.html';
            echo ("Пароль неправильный!");
            }
        }
        else
            {
            include 'index.html';
            echo ("Такого пользователя не существует!");
            }
    }
    $backgr ="<body style='background-color: #EECFA1;'>";
    echo $backgr;
?>
