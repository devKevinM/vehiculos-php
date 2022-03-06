<?php
require_once "models/Vehiculos.php";

class VehiculosControllers
{
    public function obtenerVehiculos()
    {
        $vehiculos = new Vehiculos();

        return $vehiculos::find('all');
    }

    public function registrarVehiculo($arrayVehiculo)
    {
        $vehiculos = new Vehiculos();
        $vehiculos::create($arrayVehiculo);
    }

    public function obtenerVehiculoPorId($id)
    {
        $vehiculos = new Vehiculos();

        return $vehiculos::find(array("id" => $id));
    }

    public function actualizarVehiculo($id, $vehiculoEditado)
    {
        $vehiculos = new Vehiculos();
        $vehiculo = $vehiculos::find(array("id" => $id));
        $vehiculo->update_attributes($vehiculoEditado);
    }

    public function eliminarVehiculo($id)
    {
        $vehiculos = new Vehiculos();
        $vehiculo = $vehiculos::find(array("id" => $id));
        $vehiculo->delete();

    }
}
