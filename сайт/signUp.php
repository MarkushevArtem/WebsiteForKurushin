<!DOCTYPE html>

<html>
    <head>
        <style>
  .rt {
    background-color: #92a1cf; 
    color: #fff;  
    width: 340px;
    height: 45px;
    font:15pt Helvetica, sans-serif;
    border-radius: 1.3rem;
    text-decoration: none;
  }
  h1
  {
    color: green;
  }
</style>
        <meta charset="utf-8">
        <title>Регистрация</title>
    </head>
    <body style='background-color: #EECFA1;'>
        <h1 align="center">Регистрация пользователя</h1>
        <form action="new_user.php" method="POST">
            <p align="center"><input class = rt type="text" name="login" placeholder="Введите логин" size="28" /></p>
            <p align="center"><input class = rt type="password" name="password1" placeholder="Введите пароль" size="28" /></p>
            <p align="center"><input class = rt type="password" name="password2" placeholder="Пароль еще раз" size="28" /></p>
            <p align="center"><button class = rt type="submit">Зарегистрироваться</button></p>            
        </form>
        <form action="index.html">
            <p align="center"><button class = rt type="submit">Вернуться на главную страницу</button></p>
        </form>
    </body>
</html>