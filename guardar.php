<?php
 //conectar con le servidor
 $usuario ="root";
 $password ="";
 $servidor="localhost";
 $basededatos="ventaswixarika";

$conexion = mysqli_connect($servidor,$usuario,"")or die ("error del servidor de based de datros");

$bd = mysqli_select_db($conexion, $basededatos) or die (" error conexion al conectarse a la base de datos");


$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];


$sql="INSERT INTO usuarios VALUES ('$nombre','$correo','$telefono','$edad','$sexo')";

$ejecutar=mysqli_query($conexion, $sql);

if(!$ejecutar){
 
        echo"huvo un erro";

        }else{
            echo"datos guaradados corectarmente"<br><a class="nav-link" href="index.html">Conoce más </a>;
        }
?>