<?php

// Definición de la clase Responsable
class Responsable {

    // Atributos privados de la clase
    private $nombre;
    private $apellido;
    private $nroDocumento;
    private $direccion;
    private $mail;
    private $telefono;

    // Método constructor de la clase
    public function __construct($nombre, $apellido, $nroDocumento, $direccion, $mail, $telefono) {
        
        // Asignación de los valores iniciales a los atributos de la clase
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->nroDocumento = $nroDocumento;
        $this->direccion = $direccion;
        $this->mail = $mail;
        $this->telefono = $telefono;
    }

    // Métodos públicos para acceder a los atributos de la clase
    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getNroDocumento() {
        return $this->nroDocumento;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getMail() {
        return $this->mail;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    // Métodos públicos para modificar los atributos de la clase
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setNroDocumento($nroDocumento) {
        $this->nroDocumento = $nroDocumento;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function setMail($mail) {
        $this->mail = $mail;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    // Método mágico __toString() que devuelve una cadena con información sobre el objeto "Responsable"
    public function __toString() {
        return "Responsable: " . $this->nombre . " " . $this->apellido . ", Nro de Documento: " . $this->nroDocumento . ", Direccion:" . $this ->direccion. ", Mail:". $this->mail. ", Telefono:". $this->telefono .".";
    }
}

?>