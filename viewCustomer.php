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
Enter Customer Id:
</td>
<td>
<input type="text" class="form-control" name="Cid">
</td>
</tr>
<tr>
<td>
</td>
<td>
<Button type="submit" class="btn btn-secondary" name="submit">
Get details
</Button>
</td>
</tr>
</table>
</form>    
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
    $customerId=$_POST["Cid"];

    $Servername="localhost";
    $Dbusername="root";
    $Dbpassword="";
    $Dbname="bank";
    $Connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
    $Sql="SELECT  `Name`, `Gender`, `Imei`, `Account Number`, `Phone number`, `Balance`,
    `Username`, `Password` FROM `customer` WHERE `Customer Id`=$customerId";
    $result=$Connection->query($Sql);
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            $Name=$row["Name"];
            $Gender=$row["Gender"];
            $Imei=$row["Imei"];
            $Accuntnum=$row["Account Number"];
            $Phone=$row["Phone number"];
            $balance=$row["Balance"];
            $username=$row["Username"];
            $password=$row["Password"];

            echo"<table class='table'>
            <tr> <td> Name: </td> <td> <input type='text' value='$Name'> </td> </tr>
            <tr> <td> Gender: </td> <td> <input type='text' value='$Gender'> </td> </tr>
            <tr> <td> Imei: </td> <td> <input type='text' value='$Imei'> </td> </tr>
            <tr> <td> Account number: </td> <td> <input type='text' value='$Accuntnum'> </td> </tr>
            <tr> <td> Phone num: </td> <td> <input type='text' value='$Phone'> </td> </tr>
            <tr> <td> Balance: </td> <td> <input type='text' value='$balance'> </td> </tr>
            <tr> <td> Username: </td> <td> <input type='text' value='$username'> </td> </tr>
            <tr> <td> Pass: </td> <td> <input type='password' value='$password'> </td> </tr>
            </table>";
        }
    }

}
?>