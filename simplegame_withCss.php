<!DOCTYPE html>
<html>
    <head>
        <title>Simple Game</title>
        <meta  charset="utf-8" name="" content=""/>
        <style>
          
          body{
                
                background-repeat:no-repeat;
                background-attachment: fixed ;
                background-position:center;
                background-size:contain;
                text-align :center;
            }
            h1{
                color: rgba (11 , 141 , 192);
            }
            div:hover{
              background-color: rgba(242, 255, 53, 0.747);
            }
            div{
            background-color: rgba(11, 141, 192, 0.719);
            
            /* تنعيم حواف الشكل المستطيل */
            border-radius: 5mm ;
            height: 500px;
            width: 450px;
            text-align: center;
            font-style:inherit ;
            vertical-align: middle;
                        /* لتوسيط العنصر وجعلة فى منتصف الصفحة  */
            position: absolute;
            left: 50%;
            top: 60%;
            transform: translate(-50% , -50%);
            }
            input{
              border-radius: 2mm;
              border-color:rgba(11, 141, 192, 0.719) ;
            }
        </style>
    </head>
    <body > 
    <h1>Simple Game "Think of a number &#128172" </h1>
<div>
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

    6-Finally, put the result and let the 
    computer guess which number you 
     thinking about .
</pre>    
</h4>
<label>&#129504 The Result </label>
    <input type="number" name="The_Result">
    <input type="submit" value="send">
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
      </div>
    </main>
    </body>
</html>