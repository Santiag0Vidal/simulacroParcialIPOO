<?php
class Empresa {
  private $identificacion;
  private $nombre;
  private $viajes;

  public function __construct($identificacion, $nombre) {
    $this->identificacion = $identificacion;
    $this->nombre = $nombre;
    $this->viajes = array();
  }

  // Método para obtener la identificación de la empresa
  public function getIdentificacion() {
    return $this->identificacion;
  }

  // Método para obtener el nombre de la empresa
  public function getNombre() {
    return $this->nombre;
  }

  // Método para obtener los viajes de la empresa
  public function getViajes() {
    return $this->viajes;
  }
  public function setIdentificacion($identificacion) {
    $this->identificacion = $identificacion; // Settea el atributo $identificacion con el valor del parámetro recibido
  }
  
  public function setNombre($nombre) {
    $this->nombre = $nombre; // Settea el atributo $nombre con el valor del parámetro recibido
  }
  
  public function setViajes($viajes) {
    $this->viajes = $viajes; // Settea el atributo $viajes con el valor del parámetro recibido
  }
  // Método para buscar los viajes disponibles a un destino y con una cantidad de asientos
  public function darViajeADestino($elDestino, $cantAsientos) {
    $viajesDisponibles = [];
    foreach ($this->viajes as $viaje) {
      if ($viaje->getDestino() == $elDestino && $viaje->getCantAsientosDisponibles() >= $cantAsientos) {
        $viajesDisponibles = $viaje;
      }
    }
    return $viajesDisponibles;
  }

  // Método para agregar un nuevo viaje a la empresa
  public function incorporarViaje($objViaje) {
    // Comprobar si ya existe un viaje con el mismo destino, fecha y hora de partida
    foreach ($this->viajes as $viaje) {
      if ($viaje->getDestino() == $objViaje->getDestino() &&
          $viaje->getFecha() == $objViaje->getFecha() &&
          $viaje->getHoraPartida() == $objViaje->getHoraPartida()) {
        return false; // Si ya existe, retornar false y no agregar el nuevo viaje
      }
    }
    $this->viajes[] = $objViaje; // Si no existe, agregar el nuevo viaje al array de viajes de la empresa
    return true;
  }

  // Método para vender un viaje a un destino, en una fecha y con una cantidad de asientos
  public function venderViajeADestino($cantAsientos, $destino, $fecha) {
    // Buscar los viajes disponibles a ese destino y con esa cantidad de asientos
    $viajesDisponibles = $this->darViajeADestino($destino, $cantAsientos);
    foreach ($viajesDisponibles as $viaje) {
      if ($viaje->getFecha() == $fecha && $viaje->asignarAsientosDisponibles($cantAsientos)) {
        // Si se encuentra un viaje disponible para esa fecha y hora, y se pueden asignar los asientos
        // se devuelve el objeto Viaje correspondiente
        return $viaje;
      }
    }
    return null; // Si no se encuentra ningún viaje disponible, retornar null
  }

  // Método para obtener el monto total recaudado por la empresa en todos sus viajes
  public function montoRecaudado() {
    $monto = 0;
    foreach ($this->viajes as $viaje) {
      $monto += ($viaje->getImporte() * $viaje->getCantAsientosTotales() -$viaje->getCantAsientosDisponibles()) ;
    }
    return $monto;
  }


  public function __toString() {
    $str = "Empresa: " . $this->nombre . " (" . $this->identificacion . ")\n";
    foreach ($this->viajes as $viaje) {
      $str .= "- " . $viaje->__toString() . "\n";
    }
    return $str;
  }
}
?>