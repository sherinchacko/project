<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>Bank</center>
<form method="POST">
<table class="table">
<tr>
<td>
User name:
</td>
<td>
<input type="text" class="form-control" name="uname">
</td>
</tr>
<tr>
<td>
Password:
</td>
<td>
<input type="password" name="pass" class="form-control">
</td>
</tr>
<tr>
<td>
</td>
<td>
<Button type="submit" class="btn btn-success" name="login">
Login
</Button>
</td>
</tr>
</table>
</form>
</body>
</html>
<?php
if(isset($_POST["login"]))
{
    $Username=$_POST["uname"];
    $pass=$_POST["pass"];

    $Servername="localhost";
    $Dbusername="root";
    $Dbpassword="";
    $Dbname="bank";
    $Connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
    $Sql="SELECT * FROM `banklogin` WHERE `Username`='$Username' and `Password`='$pass'";
    $result=$Connection->query($Sql);
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {


            header('Location:addCustomer.php');

        }

    }
    else
    {
        echo "failed";
    }
}
?>