<?php
require_once "modelos/datoPersona.php";
require_once "modelos/lineaPrestamo.php";
require_once "modelos/prestamo.php";
require_once "modelos/direccion.php";
require_once "modelos/provincia.php";


//Instancia provincia//
$pr = new  provincia();
$pr ->id = 1;
$pr->descripcion = "Santa Fe";

//Instancia direccion//
$d = new  direccion();
$d->id = 1;
$d->calle = "Montevideo";
$d->numero="34";
$d->localidad = "Rosario";
$d->provincia = $pr;

//Instancia datoPersona//
$dp = new  datoPersona();
$dp->id = 1;
$dp->nombre= "Daniel";
$dp->apellido="Rodriguez";
$dp->dni="12456789";
$dp->direccion = $d;

//Instancia LineaPrestamo//
$lp = new  lineaPrestamo();
$lp->id = 1;
$lp->descripcion = " Personal Sola Firma";
$lp->tasaEfectivaMensual="15 %";

//Instancia Prestamos//
$p = new  prestamo();
$p->id=1;
$p->lineaPrestamo=$lp;
$p->titular= $dp;
$p->fechaAlta="21/08/2019";
$p->cantCuotas="36";
$p->montoCapital="10.000";



$p->MostrarDatos();
?>