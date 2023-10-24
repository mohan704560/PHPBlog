<?php

class login extends CI_Controller
{
    public function index()
    {
        $this->load->library("form_validation");
        $this->load->view("admin/login");
    }

    public function authenticate()
    {
        $this->load->library("form_validation");
        $this->load->model("Admin_model");

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == true) {
            // success
            $username = $this->input->post("username");
            $admin = $this->Admin_model->getByUserName($username);
            if (!empty($admin)) {
                $password = $this->input->post("password");
                if (password_verify($password, $admin["password"]) == true) {
                    $adminArray["admin_id"] = $admin["id"];
                    $adminArray["username"] = $admin["username"];
                    $this->session->set_userdata("admin",$adminArray);
                    redirect(base_url()."admin/home/index");

                } else {
                    $this->session->set_flashdata("msg", "Either username or password is incorrect");
                    redirect(base_url() . "admin/login/index");
                }
            } else {
                $this->session->set_flashdata("msg", "Either username or password is incorrect");
                redirect(base_url() . "admin/login/index");
            }
        } else {
            $this->load->view("admin/login");
            //Failed
        }
    }

    function logout(){
        $this->session->unset_userdata("admin");
        redirect(base_url()."admin/login/index");

    }
}
