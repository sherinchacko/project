<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="addCustomer.php">Add Customer</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="viewCustomer.php">View customer</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="viewTransaction.php">View Transaction</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="banklogin.php">Logout</a>
    </li>
  </ul>
</nav>
<form method="POST">
<table class="table">
<tr>
<td>
Customer Id:
</td>
<td>
<input type="text" class="form-control" name="Cid">
</td>
</tr>
<tr>
<td>
Name:
</td>
<td>
<input type="text" class="form-control" name="Cname">
</td>
</tr>
<tr>
<td>
Gender:
</td>
<td>
<input type="text" class="form-control" name="Cgender">
</td>
</tr>
<tr>
<td>
Imei:
</td>
<td>
<input type="text" class="form-control" name="Imei">
</td>
</tr>
<tr>
<td>
Account Number:
</td>
<td>
<input type="text" class="form-control" name="Anumber">
</td>
</tr>
<tr>
<td>
Phone number:
</td>
<td>
<input type="text" class="form-control" name="Pnumber">
</td>
</tr>
<tr>
<td>
Balance:
</td>
<td>
<input type="text" class="form-control" name="Balance">
</td>
</tr>
<tr>
<td>
Username:
</td>
<td>
<input type="text" class="form-control" name="Uname">
</td>
</tr>
<tr>
<td>
Password:
</td>
<td>
<input type="password" class="form-control" name="pass">
</td>
</tr>
<tr>
<td>
</td>
<td>
<Button type="submit" class="btn btn-primary" name="upload">
Submit
</Button>
</td>
</tr>
</table>
</form>   
</body>
</html>
<?php
if(isset($_POST["upload"]))
{
  $customerId=$_POST["Cid"];
  $cName=$_POST["Cname"];
  $gender=$_POST["Cgender"];
  $Imei=$_POST["Imei"];
  $accuntNum=$_POST["Anumber"];
  $phoneNum=$_POST["Pnumber"];
  $balance=$_POST["Balance"];
  $userName=$_POST["Uname"];
  $password=$_POST["pass"];

  $Servername="localhost";
  $Dbusername="root";
  $Dbpassword="";
  $Dbname="bank";
  $Connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
  $Sql="INSERT INTO `customer`( `Customer Id`, `Name`, `Gender`, `Imei`, `Account Number`,
  `Phone number`, `Balance`, `Username`, `Password`) VALUES ($customerId,'$cName','$gender',
  $Imei,$accuntNum,$phoneNum,$balance,'$userName','$password')";
  $result=$Connection->query($Sql);
  if($result===TRUE)
  {
    echo"success";
  }
  else
  {
    echo"failed";
  }

}
?>