<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <style>
            .custom-btn,.btn-3
{
width: 230px;
  height: 40px;
}
  body
  {
    background-image: url('assets/images/intri_m_video_dark.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
  }
input
  {
   border: 5px solid #cccccc;
   border-radius: 3px;
   outline: none; 
   height: 35px; 
   width: 240px;
   font-size: 20px; 
   font-family: Tahoma; 
}
</style>
        <meta charset="utf-8">
        <title>Регистрация</title>
    </head>
    <body >
        <h1 align="center">Регистрация пользователя</h1>
        <form action="new_user.php" method="POST">
            <p align="center"><input type="text" name="login" placeholder="Введите логин" size="28" /></p>
            <p align="center"><input  type="password" name="password1" placeholder="Введите пароль" size="28" /></p>
            <p align="center"><input  type="password" name="password2" placeholder="Пароль еще раз" size="28" /></p>
            <p align="center"><button class="custom-btn btn-3" type="submit">Зарегистрироваться</button></p>            
        </form>
        <form action="index.html">
            <p align="center"><button class="custom-btn btn-3" type="submit">Вернуться на главную страницу</button></p>
        </form>
    </body>
</html>
