<?php
include 'Terminal.php';
include 'Empresa.php';
include 'Viaje.php';
Include 'Responsable.php';

// Creamos la primera instancia de la clase "Responsable"
$responsable1 = new Responsable("Juan", "Pérez", "12345678", "Calle 123", "juanperez@mail.com", "555-1234");
// Creamos la segunda instancia de la clase "Responsable"
$responsable2 = new Responsable("María", "González", "98765432", "Av. Libertador 456", "mariagonzalez@mail.com", "555-5678");

// Crear instancias de Viaje
$viaje1 = new Viaje('Buenos Aires', '10:00', '12:00', '1234', 1500, '2023-05-01', 50, 50, $responsable1);
$viaje2 = new Viaje('Córdoba', '15:30', '18:00', '5678', 2000, '2023-05-03', 30, 30, $responsable2);
$viaje3 = new Viaje('Mendoza', '08:00', '14:00', '9012', 3000, '2023-05-05', 80, 80, $responsable1);
$viaje4 = new Viaje('Bariloche', '22:00', '07:00', '3456', 4000, '2023-05-07', 100, 100, $responsable2);

// Crear instancias de Empresa
$empresa1 = new Empresa('E001', 'Flecha Bus');
$empresa1->incorporarViaje($viaje1);
$empresa1->incorporarViaje($viaje2);

$empresa2 = new Empresa('E002', 'Via Bariloche');
$empresa2->incorporarViaje($viaje3);
$empresa2->incorporarViaje($viaje4);

// Crear instancia de Terminal
$empresas=[];
$empresas[0]= $empresa1;
$empresas[1]= $empresa2;

$terminal = new Terminal('Terminal de Omnibus', 'Av. de Mayo 1234', $empresas);

// Venta automática de asientos
$resultadoVenta = $terminal->ventaAutomatica(3, '2023-04-23', 'Bariloche', $empresas[1]);
echo "Resultado venta automática:\n". $resultadoVenta;


// Empresa con mayor recaudación
$empresaMayorRecaudacion = $terminal->empresaMayorRecaudacion();
echo "\nEmpresa con mayor recaudación:\n".$empresaMayorRecaudacion->__toString();


// Responsable del viaje
$responsableViaje = $terminal->responsableViaje('1234');
echo "\nResponsable del viaje 1234:\n".$responsableViaje->__toString();
?>