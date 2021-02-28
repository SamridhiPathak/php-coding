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
    $var2=10;
    function avg()
    {global $var1;
        global $var2;
        $var3=10;
        $var4=10;
        $var5=10;
       $z= ($var1+$var2+$var3+$var4+$var5)/5;
     echo( $z);}
    
     avg();
     ?>
     
</body>
</html>