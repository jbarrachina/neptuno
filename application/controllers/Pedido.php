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
        //para paginar el listado
        $this->load->library('pagination');
        //necesitamos el total de filas
        $config['total_rows'] = $this->neptuno->num_clientes();
        $config['per_page'] = 10;
        $config['num_links'] = 4;
        $config["uri_segment"] = 3;
        $config['base_url'] = site_url().'/pedido/pagina/';
        $this->pagination->initialize($config);
        $data['clientes'] = $this->neptuno->get_clientes(["cuantos" => $config['per_page'],"inicio" => $this->uri->segment(3)]);
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
    
    public function email(){
        $this->email->from('Netpuno');
        $this->email->to("secretari@ausiasmarch.net");
        $this->email->subject('Prueba de envio de un correo electrónico');
        $this->email->message('<p><strong>Correo electrónico usando del smtp de gmail</strong></p><p> Enhorabuena si lees esto</p>');
        $this->email->send();
        //con esto podemos ver el resultado
        var_dump($this->email->print_debugger());
        //redirect('pedido');
    }

}
