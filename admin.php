<?php
session_start();
include "conn.php";
if(isset($_POST['submit'])) 
{
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $sql="select * from usere where Email= '$email' ";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result))
    {
        if($row['Email']==$email && $row['password']==$password)
        {
            $_SESSION['Email']=$email;
            
            header('location:dashboard.php');
            
        }else
        {
            echo '<script> alert("Failed") </script>';
        }
    }
    {

    }
}
?>

<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="adminstration.css">
    <title>Document</title>
</head>

<body>
    <div class="page-content">
        <div class="navbar">
        <nav class="header-nav">
            <p class="title">  بالعربي |</p> 
            <img class="logo" src="pics/bbc_logo.png" alt="BBC-News" >
            <p class="admin-header"> Admin panel</p>
        </nav>
        </div>
        <div class="card">
        <form action="" method="post">
            <div class="form-logo">
                <img  class="form-logo" src="pics/bbc_logo.png">
            </div>
                    <div class="form-group">
                        <label for="email">البريد الإلكتروني أو رقم الهاتف</label>
                        <input type="text" name="email" placeholder="أدخل البريد الإلكتروني أو رقم الهاتف" />
                    </div>
                    <div class="form-group">
                        <label for="Password">كلمة المرور</label>
                        <input type="password" name="pass" placeholder="أدخل كلمة المرور هنا" />
                    </div>
                    <br>
                    <button type="submit" class="btn" name="submit">تسجيل الدخول</button>
        </form>
        </div>
        </div>
        </div>
    </div>