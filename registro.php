
<?php

include_once ('dt.php');
// Recibo todos los datos del formulario

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$cedula=$_POST['cedula'];
$age=$_POST['age'];
$birthdate=$_POST['birthdate'];
$nacimiento=$_POST['nacimiento'];
$gender=$_POST['gender'];
$nacionalidad=$_POST['nacionalidad'];
$ocupacion=$_POST['ocupacion'];
$direccion=$_POST['direccion'];
$estado=$_POST['estado'];


// Esta formacion academica


echo "<p style='margin-top: 20px; font-size: 32px; color: lightslategrey; font-family: 'Calibri'; '>Guardados Correctamentes</p> <br>";

echo "<button style='margin-top: 20px; margin-bottom: 20px; font-size: 25px; background: linear-gradient(to right,#7888fc, #720773); border-radius: 6px; color: black; border: white; ' onclick='location.href=`http://localhost/Projecto/Formulario.html`'>Nuevo ciudadano</button> <br>";
echo "<button style='margin-top: 20px; margin-bottom: 20px; font-size: 25px; background: linear-gradient(to right,#7888fc, #720773); border-radius: 6px; color: black; border: white; ' onclick='location.href=`http://localhost/phpmyadmin/index.php?route=/sql&db=projecto&table=formulario&pos=0`'> Ver base de datos</button> <br>";

//echo "Sus Datos se guardaron Correctamente <br>";

//echo "<button onclick='location.href=`http://localhost/Projecto/Formulario.html`'>Registra nuevo ciudadano</button> <br>";
//echo "<button onclick='location.href=`http://localhost/phpmyadmin/index.php?route=/sql&db=projecto&table=formulario&pos=0`'>Base de dato</button> <br>";


ob_start();
echo "<h3 style='color:white;'>$nombre,$apellido,$cedula,$age,$birthdate,$nacimiento,$gender,$nacionalidad,$ocupacion,$direccion, y $estado</h3>";

$conectar = conn();
$sql = "INSERT INTO formulario (nombre, apellido, cedula, age, birthdate, nacimiento, gender, nacionalidad, ocupacion, direccion, estado)
VALUES ('$nombre', '$apellido', '$cedula', '$age', '$birthdate', '$nacimiento', '$gender', '$nacionalidad', '$ocupacion', '$direccion', '$estado')";
$resul = mysqli_query($conectar, $sql) or trigger_error("Query Failed! SQL- Error:".mysqli_error($conectar), E_USER_ERROR);

echo "$sql";
ob_end_clean();

?>
</div>

