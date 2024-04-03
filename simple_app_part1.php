
<form  method="POST">
<h1> Simple Application "random number selection" &#129302. </h1>
<label>&#128073 Min Number </label>
    <input type="number" name="Min">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label>&#128073 Max Number </label>
    <input type="number" name="Max">
    <br><br>
    <input type="submit" value="choose">
    <br><br>
</form >

<?php
@$_POST["Max"] or die("");//Enter The number please. 
if ($_SERVER["REQUEST_METHOD"]==="POST"):
    if($_POST["Min"]  !=="" and $_POST["Max"]  !==""){
    function rand_num($Min_num,$Max_num){
        $num=mt_rand($Min_num , $Max_num);
        return $num;
          }
    }else{
        exit();
       
    }
endif;
echo "<br><br><h4>&#128519 The number is : " ;
echo  rand_num($_POST["Min"],$_POST["Max"]) ."</b></h4>";
?>