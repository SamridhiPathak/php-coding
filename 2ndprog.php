<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $var1="abc";
    function myfun()
    {global $var1;
        $var2="xyz";
    echo $var1."<br>";
     echo $var2."<br>";}
     myfun()."<br>";
     echo $var1;
    // echo $var2;
    ?>
</body>
</html>