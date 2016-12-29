<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cliente
 *
 * @author jose
 */
class Cliente extends CI_Controller{
    //put your code 
    public function __construct() {
        parent::__construct();
        $this->load->model('neptuno');
        
    }
    
    public function add(){
        $this->load->helper('form');
        $this->load->helper('url'); //por redirect
        $this->load->library('form_validation');
        $this->load->library('session'); //por flashdata
        
        $data['title']='Alta de Clientes';
        $this->form_validation->set_rules('nombreCli', 'nombre del cliente', 'required', ['required'=>'No se te puede olvidar el %s']);
        $this->form_validation->set_rules('codCliente', 'código de cliente', 'required|exact_length[5]|alpha|is_unique[cliente.codCliente]|strtoupper');
        $this->form_validation->set_rules('direccion', 'dirección del cliente', 'required|trim');
        $this->form_validation->set_rules('ciudad', 'ciudad del cliente', 'required|alpha_numeric_spaces');
        $this->form_validation->set_rules('cpostal', 'código postal', 'required|exact_length[5]|numeric');
        $this->form_validation->set_rules('idPais', 'código de país del cliente', 'required|exact_length[3]|strtoupper|alpha|in_list[USA,ESP,FRA,POR,DEU,FIN]');
        $this->form_validation->set_rules('telefono', 'teléfono del cliente', 'required|numeric');
        $this->form_validation->set_rules('fax', 'fax del cliente', 'required|numeric');

        if ($this->form_validation->run() === TRUE)
        {
            $data = array(
                'nombreCli' => $this->input->post('nombreCli'),
                'codCliente' => $this->input->post('codCliente'),
                'direccion' => $this->input->post('direccion'),
                'ciudad' => $this->input->post('ciudad'),
                'cpostal' => $this->input->post('cpostal'),
                'idPais' => $this->input->post('idPais'),
                'telefono' => $this->input->post('telefono'),
                'fax' => $this->input->post('fax')
            );
            $this->neptuno->add_cliente($data);
            $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Cliente añadido satisfactoriamente</div>'); //preparamos el mensaje de éxito
            redirect(current_url()); //volvemos a al misma página para seguir introduciendo clientes.            
        }
        $this->load->view('cabecera',$data);
        $this->load->view('cliente/create');
        $this->load->view('pie');    
    }

}
