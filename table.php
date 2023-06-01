
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    
</body>
</html><?php
$bg_color = 'lightgreen'; 
$position='500px';
$docs='100px';
$margin='600px';
$color='blue';
$style='240px';
$point='600px';
echo"<h2 style='background-color:$color;width:$style'>MULTIPLICATION TABLES</h2>";
echo"<body style='background-color: $bg_color; margin-left:$position;margin-top:$docs'> ";
 for($i=0;$i<10;$i++){
    
    echo"<body style='background-color: $bg_color; margin-left:$point;margin-top:$margin'> ";
    echo("<br>   2*");
     echo("$i");
    echo("=");
    echo($i*2);
    

 }
?>