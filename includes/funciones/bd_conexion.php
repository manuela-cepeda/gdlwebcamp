<?php 
 
/* 
Aquí abrimos la conexión en el servidor. Normalmente se envian 3 parametros (los datos del servidor, usuario y contraseña) a la función mysql_connect, si no hay ningún error la conexión será un éxito El @ que se ponde delante de la funcion, es para que no muestre el error al momento de ejecutarse, ya crearemos un código para eso
*/
 
$conn = new mysqli('localhost', 'root', '','gdlwebcamp'); 
 
/* 
Aquí preguntamos si la conexión no pudo realizarse, de ser así lanza un mensaje en la pantalla con el siguiente texto "No pudo conectarse:" y le agrega el error ocurrido con "mysql_error()" 
*/
 
if ($conn->connect_error) { 
    echo $error -> $conn->connect_error;
}else{ 
    // La siguiente linea no es necesaria, simplemente la pondremos ahora para poder observar que la conexión ha sido realizada 
   //  echo 'Conectado  satisfactoriamente al servidor <br />'; 
} 

 
?>