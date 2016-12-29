<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Neptuno
 *
 * @author jose
 */
class Neptuno extends CI_Model{
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_clientes($limites = FALSE)
    {
        if ($limites !== FALSE)
        {
              $this->db->limit($limites['cuantos'],$limites['inicio']);//hay select, from, join, where, ...
        }
         $query = $this->db->get('cliente'); //ejecutamos la consulta
        return $query->result(); //devolvemos un array de objetos 
    }
    
    public function get_pedidos($cliente = FALSE)
    {
        if ($cliente !== FALSE)
        {
            $this->db->where('idCliente',$cliente);
        }
        $query = $this->db->get('pedido');
        return $query->result();
    }
    
    public function add_cliente($cliente)
    {
        $this->db->insert('cliente',$cliente);        
    }
    
}
