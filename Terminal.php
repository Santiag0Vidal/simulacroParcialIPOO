<?php
class Terminal {
    private  $denominacion;
    private  $direccion;
    private  $empresas;

    public function __construct($denominacion, $direccion,$empresas) {
        $this->denominacion = $denominacion;
        $this->direccion = $direccion;
        $this->empresas = $empresas;
    }

    // Obtiene la denominación de la terminal
    public function getDenominacion() {
        return $this->denominacion;
    }

    // Obtiene la dirección de la terminal
    public function getDireccion() {
        return $this->direccion;
    }

    // Obtiene las empresas que operan en la terminal
    public function getEmpresas() {
        return $this->empresas;
    }

   

    // Permite comprar automáticamente un viaje, asignando asientos disponibles y devolviendo el viaje correspondiente
    public function ventaAutomatica($cantAsientos, $fecha, $destino, $empresa) {
      $viajes = $empresa->darViajeADestino($destino, $cantAsientos);
      foreach ($viajes as $viaje) {
        if ($viaje->getFecha() == $fecha) {
          $asignacionExitosa = $viaje->asignarAsientosDisponibles($cantAsientos);
          if ($asignacionExitosa) {
            return $viaje;
          }
        }
      }
      return null;
    }
    // Devuelve la empresa que ha tenido la mayor recaudación en la terminal
    public function empresaMayorRecaudacion(){
        $mayorRecaudacion = null;
        $montoMaximo = 0;
        foreach ($this->empresas as $empresa) {
            $montoTotal = $empresa->montoRecaudado();
            if ($montoTotal > $montoMaximo) {
                $mayorRecaudacion = $empresa;
                $montoMaximo = $montoTotal;
            }
        }
        return $mayorRecaudacion;
    }

    // Devuelve el responsable de un viaje especificado por su número
    public function responsableViaje($numeroViaje) {
        foreach ($this->empresas as $empresa) {
            foreach ($empresa->getViajes() as $viaje) {
                if ($viaje->getNumero() == $numeroViaje) {
                    return $viaje->getResponsable();
                }
            }
        }
        return null;
    }

    // Permite modificar la denominación de la terminal
    public function setDenominacion( $denominacion) {
        $this->denominacion = $denominacion;
    }

    // Permite modificar la dirección de la terminal
    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }

    // Permite modificar las empresas que operan en la terminal
    public function setEmpresas($empresas){
        $this->empresas = $empresas;
    }
     // Devuelve una cadena con la información de la terminal
     public function __toString(){
        return "Denominación: " . $this->denominacion . ", Dirección: " . $this->direccion;
    }
}
?>