<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style>#echo{text-align: center;}    </style>
</head>
<body>

<div id="echo">
<?php
$h="localhost";
$u="root";
$p="";
$db="rpo";
$con=new mysqli($h,$u,$p,$db);
if($con -> connect_error){
   echo "error de conexion";
} else{
    echo "<br>conexion exitosa";
}
?>
</div>
</body>
</html>