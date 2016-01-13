<?php
function conecta()
{
	mysql_connect("localhost","root");
    mysql_select_db("allmacigos");
    mysql_query("SET NAMES 'utf8'"); 
}

//Formato Fecha Normal 24/09/2012 dd-mm-yyyy
function fecha_hoy_normal()
{
	$fecha=date('d-m-Y');
	return $fecha;
}

//Formato Fecha Base de Datos 2012-09-24 yyyy-mm-dd

function fecha_hoy_bd()
{
	$fecha=date('Y-m-d');
	return $fecha;
}

//Formato Hora HH:mm:ss

function hora_hoy()
{

	$hora=date('H:i:s');
	return $hora;
}
//Convertir formato fecha bd-a-normal yyyy-mm-dd a dd-mm-yyyy

function fecha_bd_normal($fecha)
{

	$anho=substr($fecha,0,4);
	$mes=substr($fecha,5,2);
	$dia=substr($fecha,8,2);

	return $dia."-".$mes."-".$anho;
}

function fecha_normal_bd($fecha)
{

	$dia=substr($fecha,0,2);
	$mes=substr($fecha,3,2);	
	$anho=substr($fecha,6,4);

	return $anho."-".$mes."-".$dia;
}
?>