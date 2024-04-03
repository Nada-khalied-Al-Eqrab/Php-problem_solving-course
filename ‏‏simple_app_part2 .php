
<form  method="POST" >
<h1> Simple Application "random number selection" &#129302. </h1>
<label>&#128073 Min Number </label>
    <input type="number" name="Min">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label>&#128073 Max Number </label>
    <input type="number" name="Max">
    <br><br>
<label>&#127908 Your Number </label>
    <input type="number" name="Your_Number">
    <br><br>
    <input type="submit" value="choose">
    <br><br>
</form >

<?php
@$_POST["Max"] or die("");//Enter The number please. 
if ($_SERVER["REQUEST_METHOD"]==="POST"):
    if($_POST["Min"]  !=="" and $_POST["Max"]  !==""){
    function rand_num($Min_num,$Max_num , $person_num){
        $num = mt_rand($Min_num , $Max_num );
        if ($person_num !== $num){
            echo "<h3>You lost ,and better luck next time &#128543.</h3>"  ;
        
        }else{
            echo "<h3>You are the winer &#129395.</h3> 
                  <br>
                  and this is the QR for the free 
                  <br>
                  <img src='php_course.png'>";  //<img src="php_course.png">  erro
            
          }  
        }
    }else{
        exit();
       
    }
endif;
rand_num($_POST["Min"],$_POST["Max"] , $_POST["Your_Number"]) ."</b></h4>";
?>