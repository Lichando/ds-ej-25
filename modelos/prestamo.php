<?php

class prestamo{
    public $id;
    public $lineaPrestamo;
    public $titular;
    public $fechaAlta;
    public $cantCuotas;
    public $montoCapital;

    public function MostrarDatos(){
       /*Echo para prestamos*/
        echo '-------------------------------------------------------------------'.'<br>'.
             'ID: '. $this->id.'<br>'.
             'Fecha de Alta: ' .$this->fechaAlta.'<br>'.
             'Cantidad de cuotas: '. $this->cantCuotas.'<br>'.
             'Monto Capital: ' .$this->montoCapital.'<br>';
        /*Echo para lineaPrestamo*/
        echo '-------------------------------------------------------------------'.'<br>'.
             'ID: '. $this->lineaPrestamo->id.'<br>'.
             'Descripcion: '. $this->lineaPrestamo->descripcion.'<br>'. 
             'Tasa Efectiva Mensual: '. $this->lineaPrestamo->tasaEfectivaMensual.'<br>';
        /*Echo para datosPersona*/
        echo '-------------------------------------------------------------------'.'<br>'.
             'ID: '. $this->titular->id.'<br>'.
             'Nombre: '. $this->titular->nombre.'<br>'.
             'Apellido: '. $this->titular->apellido.'<br>'.
             'Documento: '. $this->titular->dni.'<br>';            
        /*Echo para direccion*/
        echo '-------------------------------------------------------------------'.'<br>'.
             'ID: '. $this->titular->direccion->id.'<br>'.
             'Calle: ' .$this->titular->direccion->calle.'<br>'.
             'Numero: ' .$this->titular->direccion->numero.'<br>'.   
             'Localidad: ' .$this->titular->direccion->localidad.'<br>';       
        /*Echo para provincia*/
        echo '-------------------------------------------------------------------'.'<br>'.
             'ID: '. $this->titular->direccion->provincia->id.'<br>'.
             'Descripcion: ' .$this->titular->direccion->provincia->descripcion.'<br>';    
    }
}

?>