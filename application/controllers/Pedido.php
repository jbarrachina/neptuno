<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Neptuno
 *
 * @author jose
 */
class Pedido extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('neptuno');
    }
    
    public function index()
    {
        $data['clientes'] = $this->neptuno->get_clientes();
        $data['title'] = 'Listado Clientes';
        $this->load->view('listado_clientes', $data);
    }
    
    public function cliente(){
        $this->load->helper('url'); //para manipular la url
        $idCliente = $this->uri->segment(3); //el parámetro
        $data['pedidos'] = $this->neptuno->get_pedidos($idCliente);
        $data['title'] = 'Listado Pedidos';
        $this->load->view('listado_pedidos', $data);
    }

}
