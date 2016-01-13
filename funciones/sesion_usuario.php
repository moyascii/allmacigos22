<?php
include("conexion.php");
conecta();
$clave=md5($_POST['clave']);
$correo=$_POST['correo'];
$sqlExiste="SELECT * FROM usuario WHERE USUARIO_CORREO='".$correo."' and USUARIO_ESTADO=0";
$resuExiste=mysql_query($sqlExiste);
$totExiste=mysql_num_rows($resuExiste);
if ($totExiste==0) {
	header("Location:../index.php?correono"); 
}else{
	$sqlSesion="SELECT * FROM usuario WHERE USUARIO_CORREO='".$correo."' and USUARIO_CLAVE='".$clave."'";
	if (mysql_num_rows(mysql_query($sqlSesion))!=0) {	
		$datos=mysql_fetch_array(mysql_query($sqlSesion));
		$_SESSION['idUsu']       =$datos['USUARIO_ID'];
		$_SESSION['nombreUsu']   =$datos['NOMBREUSU'];
		$_SESSION['apellidoUsu'] =$datos['APELLIDOUSU'];
		$_SESSION['correoUsu']   =$datos['USUARIO_CORREO'];
		$_SESSION['tipoUsu']     =$datos['TIPOUSU'];
		header("Location:../home.php?");
	}else{
		header("Location:../index.php?claveno");
	}
}
?>	