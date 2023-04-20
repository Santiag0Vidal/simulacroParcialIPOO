<?php
class Viaje
{
    private $destino;
    private $horaPartida;
    private $horaLlegada;
    private $numero;
    private $importe;
    private $fecha;
    private $cantAsientosTotales;
    private $cantAsientosDisponibles;
    private $responsable;

    public function __construct($destino, $horaPartida, $horaLlegada, $numero, $importe, $fecha, $cantAsientosTotales, $cantAsientosDisponibles, $responsable)
    {
        $this->destino = $destino;
        $this->horaPartida = $horaPartida;
        $this->horaLlegada = $horaLlegada;
        $this->numero = $numero;
        $this->importe = $importe;
        $this->fecha = $fecha;
        $this->cantAsientosTotales = $cantAsientosTotales;
        $this->cantAsientosDisponibles = $cantAsientosDisponibles;
        $this->responsable = $responsable;
    }

    public function getDestino()
    {
        return $this->destino;
    }

    public function getHoraPartida()
    {
        return $this->horaPartida;
    }

    public function getHoraLlegada()
    {
        return $this->horaLlegada;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function getImporte()
    {
        return $this->importe;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function getCantAsientosTotales()
    {
        return $this->cantAsientosTotales;
    }

    public function getCantAsientosDisponibles()
    {
        return $this->cantAsientosDisponibles;
    }

    public function getResponsable()
    {
        return $this->responsable;
    }
    // Métodos set
    public function setDestino($destino)
    {
        $this->destino = $destino;
    }

    public function setHoraPartida($horaPartida)
    {
        $this->horaPartida = $horaPartida;
    }

    public function setHoraLlegada($horaLlegada)
    {
        $this->horaLlegada = $horaLlegada;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    public function setImporte($importe)
    {
        $this->importe = $importe;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    public function setCantAsientosTotales($cantAsientosTotales)
    {
        $this->cantAsientosTotales = $cantAsientosTotales;
    }

    public function setCantAsientosDisponibles($cantAsientosDisponibles)
    {
        $this->cantAsientosDisponibles = $cantAsientosDisponibles;
    }

    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;
    }

    public function asignarAsientosDisponibles($catAsientos)
    {
        if ($catAsientos <= $this->cantAsientosDisponibles) {
            $this->cantAsientosDisponibles -= $catAsientos;
            return true;
        } else {
            return false;
        }
    }


    // ...

    // Método para representar el objeto como string
    public function __toString()
    {
        $str = "Destino: " . $this->destino . "\n";
        $str .= "Hora de partida: " . $this->horaPartida . "\n";
        $str .= "Hora de llegada: " . $this->horaLlegada . "\n";
        $str .= "Número: " . $this->numero . "\n";
        $str .= "Importe: " . $this->importe . "\n";
         $str .= "Fecha: " . $this->fecha . "\n";
        $str .= "Cantidad de asientos totales: " . $this->cantAsientosTotales . "\n";
        $str .= "Cantidad de asientos disponibles: " . $this->cantAsientosDisponibles . "\n";
        $str .= "Responsable: " . $this->responsable . "\n";
        return $str;
    }
}
