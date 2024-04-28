<?php
$c=$_POST['cu'];
$h=$_POST['ho'];
$e=$_POST['es'];
$id=$_POST['ce'];
$f=$_POST['ft'];


$ID = "Identificado con la cédula de ciudadanía: $id.";
$Curso = "Curso y aprobó satisfactoriamente el curso de $c, el cual tuvo una duración de $h horas.";
$fin = "Dicho curso finalizó el día $f.";
$emitido = "Este certificado fue expedido en el corregimiento de Cañaveral el día: ".date('y-m-d').".";


header("Location: Certificado.html?Nombre=$e&Identificacion=$ID&Curso_Horas=$Curso&Fecha_fin=$fin&Final=$emitido");
exit;

?>