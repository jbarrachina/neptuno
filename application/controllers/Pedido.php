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
        $data['title'] = 'Listado Clientes';
        $this->load->view('cabecera', $data);
        $data['clientes'] = $this->neptuno->get_clientes();
        $this->load->view('listado_clientes', $data);
        $this->load->view('pie'); //no necesita pasarle los datos
    }
    
    public function cliente(){
        $data['title'] = 'Listado Pedidos';
        $this->load->view('cabecera', $data);
        $this->load->helper('url'); //para manipular la url
        $idCliente = $this->uri->segment(3); //el parámetro
        $data['pedidos'] = $this->neptuno->get_pedidos($idCliente);       
        $this->load->view('listado_pedidos', $data);
        $this->load->view('pie');
    }

}
