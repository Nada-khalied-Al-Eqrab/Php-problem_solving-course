<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>The Real Name </title>
</head>
<body>
<h1>New you can git the real name from the hash</h1>
<form action="" method="post"  >
 <leabel > Git the real name : </leabel>
   <input type="text"  name="username_befor_hash">
   <input type="submit" value="send "> 
<br>
<?php
/*//Get hash
$HashName=strrev($Huser_name);
$HashServer=strrev($_SERVER["HTTP_CONNECTION"]);
$num1="72890";
$num2="000087877987542412";
$num3="5543566";
return $.$HashName.$HashName.$HashName;
*/
$msg_hash=@$_POST["username_befor_hash"] or die("Enter the Hash Please.");
echo "<br><br> Input hash is : " . $msg_hash ;
if ($_SERVER["REQUEST_METHOD"]==="POST"):
    if ($_POST["username_befor_hash"]!==""){
        function BeforeHash($Hash){
            $HashServer=strrev($_SERVER["HTTP_CONNECTION"]);
            $num1="72890";
            $num2="000087877987542412";
            $num3="5543566";
            //remove hashing 
            $translate=[$HashServer=>"",$num1=>"",$num2=>"",$num3=>""];
            $remove_hash=strrev(strtr($Hash, $translate));
            $real_name_letters=strlen($remove_hash)/3;
            echo "<br><br>the real name of this person is : ";
            //loop
            for ($i=0; $i<$real_name_letters ; $i++){
                echo $remove_hash[$i];
            }

        }
//متنسيش الدالدالدالة اللى بتمسح المسفات من الجنبين  المرة الجاية 
    }else{
        exit();
    }
endif; 
BeforeHash($_POST["username_befor_hash"]);
?>
</form>
</body>
</html>