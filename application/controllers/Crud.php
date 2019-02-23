<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Crud extends CI_Controller
{

    public function index()
    {
        $data = array('content' => $this->db->get('identitas'));
        $this->load->view('Crud/index.php', $data);

    }
    public function add()
    {
        $this->load->view('Crud/add');

    }
    public function action_add()
    {
        $data = array('nama' =>
            $this->input->post('nama'),
            'status' =>
            $this->input->post('status'),
            'jurusan' =>
            $this->input->post('jurusan'),
        );
        $this->db->insert('identitas', $data);

        redirect('crud', 'refresh');

    }
    public function update($id = null)
    {

        $this->db->where('id', $id);
        $data = array('content' => $this->db->get('identitas'));
        $this->load->view('Crud/update.php', $data);

    }
    public function action_update($id = null)
    {

        $this->db->where('id', $id);
        $data = array('nama' =>
            $this->input->post('nama'),
            'status' =>
            $this->input->post('status'),
            'jurusan' =>
            $this->input->post('jurusan'),
        );
        $this->db->update('identitas', $data);

        redirect('crud', 'refresh');

    }
    public function delete($id = null)
    {

        $this->db->where('id', $id);

        $this->db->delete('identitas');

        redirect('crud', 'refresh');
    }

}
