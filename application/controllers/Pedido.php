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
        //$this->load->helper('url');
        $this->load->library('ion_auth');
        if($this->ion_auth->logged_in()===FALSE)
        {
            redirect('auth/login');
        }
    }
    
    public function index()
    {
        $data['title'] = 'Listado Clientes';
        $data['active'] = 'home';
        $this->load->view('cabecera', $data);
        $data['clientes'] = $this->neptuno->get_clientes();
        $this->load->view('listado_clientes', $data);
        $this->load->view('pie'); //no necesita pasarle los datos
    }
    
    public function cliente(){
        $data['title'] = 'Listado Pedidos';
        $data['active'] = 'home';
        $this->load->view('cabecera', $data);
        $this->load->helper('url'); //para manipular la url
        $idCliente = $this->uri->segment(3); //el parámetro
        $data['pedidos'] = $this->neptuno->get_pedidos($idCliente);       
        $this->load->view('listado_pedidos', $data);
        $this->load->view('pie');
    }

}
