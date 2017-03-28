<?php
header('Access-Control-Allow-Origin: *');
if(isset($_POST)){
$to = "info@iglesiamekaddesh.org";
    if($_POST["typeForm"]=="contacto"){
        $subject = "Contacto";
    }
    else  if($_POST["typeForm"]=="oracion"){
        $subject = "Solicitud de Oración";
    }

$txt = "De: ". $_POST['txtNombre'] ." \n email: ". $_POST['txtCorreoElectronico'].
"\n  ".$_POST['txtContenido'];
$headers = "From: website@iglesiamekaddesh.org" . "\r\n";
/*echo $to;
echo $txt;
echo $subject;
    */
mail($to,$subject,$txt,$headers);
}
?>