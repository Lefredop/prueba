<?php
//conexion con al base de datos
//$link = @mysql_connect("localhost","root",""); 
//$db = mysql_connect("formulario",$link);


//conectamos con el servidor 
$link=@mysqli_connect('localhost','root','','formulario'); 
//verificamos la conexion
if(!$link){
    echo "no se pudo conectar con el servidor";
}

//obtenemos los valores del formulario
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$mensaje=$_POST['mensaje'];

//ingresamos la informacion a la tabla usando un insert con SQL
$sql= "INSERT INTO contacto VALUES('',
                                '$nombre',
                                '$email',
                                '$telefono',
                                '$mensaje')";
//ejecutamos la base de datos y la sentencia SQL
$ejecutar=mysqli_query($link, $sql);
//verificamos la ejecucion
if(!$ejecutar){
    echo "Hubo un error";
}else{
    echo "Sus datos fueron guardados, gracias, Lo contactaremos. <br><a href='index.html'>volver</a>";
}
?>