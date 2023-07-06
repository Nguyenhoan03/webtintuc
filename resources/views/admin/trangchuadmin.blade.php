<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <style>

        body{
            margin-top: 250px;
            background-color: blue;
            text-align: center;
            justify-content: center;
        }
       .name{
                width:250px;
                height: 35px;
                border: 2px solid yellow;
                border-radius: 10px;
        }
        .password{
                width:250px;
                height: 35px;
                border: 2px solid yellow;
                border-radius: 10px;
        }
        .login{
                width:150px;
                height: 25px;
                border: 2px solid pink;
                border-radius: 10px;
        }


    </style>
</head>
<body>  

<h1 style="color:red;">laravel-web tin tức</h1>
<form action="admin" method="post">
    @csrf

    <input type="text" class="name" name="username" placeholder="nhập tên tài khoản"><br><br>
    <input type="text" class="password" name="password" placeholder="nhập password"><br><br>
    <button type="submit" class="login">LOGIN</button>


</form>
    
</body>
</html>
