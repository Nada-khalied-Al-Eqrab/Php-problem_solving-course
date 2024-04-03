<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hash your name </title>
</head>
<body>
<h1>Hello! let's hashing your name</h1>
<form  method="POST">
    <br>
    <label> user name </label>
    <input type="text" name="username">
    <input type="submit" value="send">
    <br>
 <?php
$mgs_name=@$_POST["username"] or die("Enter the your name please");
echo "<br> User name is :$mgs_name";
if ($_SERVER["REQUEST_METHOD"]==="POST"):
    if($_POST["username"]!==""){
    // function  for hash the name
    function AfterHash($Huser_name){
        //Get hash
        $HashName=strrev($Huser_name);
        $HashServer=strrev($_SERVER["HTTP_CONNECTION"]);
        $num1="72890";
        $num2="000087877987542412";
        $num3="5543566";
        return $HashServer.$num1.$HashServer.$HashName. $num3.$HashName.$num2.$HashName;
    }
    }else{
        exit();
    }
endif;
echo "<br> <br>user name after hashing is :" . AfterHash($_POST["username"])
 ?>   
</form>
</body>
</html>