
<?php include_once("../analyticstracking.php") ?>

<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$comentarios = $_POST['comentarios'];
$para = 'marco@datacomsureste.com.mx';
//'marco@datacomsureste.com.mx';
$titulo = 'Datacom - Contacto WEB';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Telefono: $telefono\n Comentarios:\n $comentarios";
  
if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Su mensaje ha sido enviado, en breve nos pondremos en contacto con usted, muchas gracias.');
window.location.href = 'http://www.datacomsureste.com.mx/nuevositio/index.html';
</script>";
} else {
echo 'Falló el envio, por favor intente de nuevo';
}
}
?>

