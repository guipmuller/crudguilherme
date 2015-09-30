<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class clientes extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('clientes_model', 'model', TRUE);
    }

    function index() {
        $this->load->helper('form');
        $data['titulo'] = "CRUD";
        $data['clientes'] = $this->model->listar();
        $this->load->view('clientes_view.php', $data);
    }

    function inserir() {
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<span>', '</span>');
        $this->form_validation->set_rules('nome', 'Nome', 'required|max_length[45]');
        $this->form_validation->set_rules('cpf', 'CPF', 'required|max_length[45]');
        $this->form_validation->set_rules('email', 'E-mail', 'trim|required|valid_email|max_length[45]');
        $this->form_validation->set_rules('telefone', 'Telefone', 'required|max_length[45]');
        if ($this->form_validation->run() === FALSE) {
            $this->index();
        } else {
            $data['nome'] = $this->input->post('nome');
            $data['cpf'] = $this->input->post('cpf');
            $data['email'] = $this->input->post('email');
            $data['telefone'] = $this->input->post('telefone');

            if ($this->model->inserir($data)) {
                redirect('clientes');
            } else {
                log_message('error', 'Erro ao inserir o cliente.');
            }
        }
    }

    function editar($id) {
        $data['titulo'] = "CRUD | Editar Cliente";
        $data['dados_cliente'] = $this->model->editar($id);
        $this->load->view('clientes_edit', $data);
    }

    function atualizar() {
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<span>', '</span>');
        $validations = array(
            array(
                'field' => 'nome',
                'label' => 'Nome',
                'rules' => 'trim|required|max_length[40]'
            ),
            array(
                'field' => 'cpf',
                'label' => 'CPF',
                'rules' => 'trim|required|max_length[40]'
            ),
            array(
                'field' => 'email',
                'label' => 'E-mail',
                'rules' => 'trim|required|valid_email|max_length[100]'
            ),
            array(
                'field' => 'telefone',
                'label' => 'Telefone',
                'rules' => 'trim|required|max_length[40]'
            )
        );
        $this->form_validation->set_rules($validations);
        if ($this->form_validation->run() === FALSE) {
            $this->editar($this->input->post('id'));
        } else {
            $data['id'] = $this->input->post('id');
            $data['nome'] = ucwords($this->input->post('nome'));
            $data['cpf'] = ucwords($this->input->post('cpf'));
            $data['email'] = strtolower($this->input->post('email'));
            $data['telefone'] = ucwords($this->input->post('telefone'));
            if ($this->model->atualizar($data)) {
                redirect('clientes');
            } else {
                log_message('error', 'Erro ao atualizar o cliente.');
            }
        }
    }

    function deletar($id) {

        if ($this->model->deletar($id)) {
            redirect('clientes');
        } else {
            log_message('error', 'Erro ao deletar a pessoa.');
        }
    }

}
