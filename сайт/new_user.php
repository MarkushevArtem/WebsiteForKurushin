<?php  
  require 'db.php';
  $lgn = $_POST['login'];
  $sql = "SELECT * FROM data WHERE userLogin = '$lgn';";
  if (@sizeof($db->query($sql)->fetch_array()) > 0)
  {
    include 'signUp.php';
    echo "<center>Пользователь уже существует!</center>";
  }
  else if ($_POST['login']=='' || $_POST['password1']=='' || $_POST['password2']=='')
  {
    include 'signUp.php';
    echo "<center>Все поля должны быть заполнены!</center>";
  }
  else if ($_POST['password1'] == $_POST['password2'])
  {    
    $pswrd = $_POST['password1'];
    include 'index.html';
    include 'rand_generate.php';
    do{
        $genIndex = generate_index();
    } while (@sizeof($db->query("SELECT * FROM data WHERE userIndex = '$genIndex';")->fetch_array()) > 0);
    
    $sql = "INSERT INTO data VALUES ('$lgn', '$pswrd', '$genIndex');";
    $db->query($sql);
  }
  else
  {
    include 'signUp.php';
    echo '<html><p align="center"><font color="red">Пароли не совпадают</font></p></html>';
  }
?>
