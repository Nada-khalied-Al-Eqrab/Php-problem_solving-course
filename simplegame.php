<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Game</title>
</head>
<body>
<h1>Simple Game "Think of a number &#128172" </h1>
<form method="POST">
<h2>Hello let's play with me &#129302.</h2>
<h3>&#11088 Follow these steps:</h3>
<h4>
<pre>
    1-Think of any number.
    2-Then multiply this number by 10 .
    3-Then subtract from it 10 .
    4-Then add to it number 3.
    5-Then multiply this number by 10 .
    6-Finally, put the result and let the computer 
    guess which number you were thinking about .
</pre>    
</h4>
<label>&#129504 The Result </label>
    <input type="number" name="The_Result">
    <input type="submit" value="send">
    <br>
<?php
@$_POST["The_Result"] or die("");//Enter The Result please. 
if ($_SERVER["REQUEST_METHOD"]==="POST"):
    if($_POST["The_Result"]!==""){
    function real_number($Result){
        $num=(($Result/10)-3+10)/10;
        return $num;
          }
    }else{
        exit();
    }
endif;
echo "<br><br><h4>&#129313 the number you'v been thinking about is : " ;
echo  real_number($_POST["The_Result"]) ."</b></h4>";
 ?>   
</form>
</body>
</html>