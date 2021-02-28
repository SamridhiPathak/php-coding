<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $var1=10;
     function add()
     {global $var1;
         $var2=1;
         $z=$var1+$var2;
     echo"<h1><i><b>sum is</b></i></h1>$z<br>";}
    
     function sub()
     {global $var1;
         $var2=1;
     echo($var1-$var2)."<br>";}

     function multi()
     {global $var1;
         $var2=1;
     echo($var1*$var2)."<br>";}

     function div()
     {global $var1;
         $var2=1;
     echo($var1/$var2);}
    
    add();
    sub();
    multi();
    div();
      ?>
</body>
</html>