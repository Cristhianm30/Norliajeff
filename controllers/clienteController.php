<?php

require_once '../models/cliente.php';  
require_once '../models/conexion.php';  

class ClienteController {
    private $db;

    public function __construct() {
        $conexion = new Conexion();
        $this->db = $conexion->getConexion();
    }

    // Crear un nuevo cliente
    public function crearCliente($Nombre, $Apellido, $Correo, $Direccion, $Telefono, $UsuarioID) {
        $sql = "INSERT INTO clientes (Nombre, Apellido, Correo, Direccion, Telefono, UsuarioID) 
                VALUES (?, ?, ?, ?, ?, ?)";
        
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param('sssssi', $Nombre, $Apellido, $Correo, $Direccion, $Telefono, $UsuarioID);
        
        return $stmt->execute();
    }

    // Obtener un cliente por ID
    public function obtenerClientePorID($ID) {
        $sql = "SELECT * FROM clientes WHERE ID = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param('i', $ID);
        $stmt->execute();
        
        $resultado = $stmt->get_result()->fetch_assoc();
        if ($resultado) {
            return new Cliente($resultado['ID'], $resultado['Nombre'], $resultado['Apellido'], $resultado['Correo'], $resultado['Direccion'], $resultado['Telefono'], $resultado['UsuarioID']);
        }
        
        return null;
    }

    // Actualizar un cliente
    public function actualizarCliente($ID, $Nombre, $Apellido, $Correo, $Direccion, $Telefono, $UsuarioID) {
        $sql = "UPDATE clientes SET Nombre = ?, Apellido = ?, Correo = ?, Direccion = ?, Telefono = ?, UsuarioID = ? 
                WHERE ID = ?";
        
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param('ssssssi', $Nombre, $Apellido, $Correo, $Direccion, $Telefono, $UsuarioID, $ID);
        
        return $stmt->execute();
    }

    // Eliminar un cliente
    public function eliminarCliente($ID) {
        $sql = "DELETE FROM clientes WHERE ID = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param('i', $ID);
        
        return $stmt->execute();
    }

    // Obtener todos los clientes
    public function obtenerTodosLosClientes() {
        $sql = "SELECT * FROM clientes";
        $resultado = $this->db->query($sql);
        
        $clientes = [];
        while ($row = $resultado->fetch_assoc()) {
            $clientes[] = new Cliente($row['ID'], $row['Nombre'], $row['Apellido'], $row['Correo'], $row['Direccion'], $row['Telefono'], $row['UsuarioID']);
        }
        
        return $clientes;
    }
}