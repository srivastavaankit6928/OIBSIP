<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registration extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('General_model', 'gm');
        $this->load->library('session');

    }

    public function signUp()
    {
        $data = array();
        $this->load->library('form_validation');

        $config = array(
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|valid_email|is_unique[users.emailId]',
                'errors' =>
                    array(
                        'required' => 'Please enter your email',
                        'valid_email' => 'Please enter the valid email',
                        'is-unique' => 'already exists!'
                    )
            ),

            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|trim|regex_match[/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]+$/]',
                'errors' =>
                    array(
                        'regex_match' => 'The password must contain alphanumeric characters.',
                        'required' => 'Please enter your password'
                    )
            ),

            array(
                'field' => 'passconf',
                'label' => 'Password Confirmation',
                'rules' => 'required|matches[password]',
                'errors' =>
                    array(
                        'matches' => 'The password must be same .',
                        'required' => 'Please enter your password to confirm it.'
                    )
            )
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {

            $data['validation'] = true;
            $this->load->view('welcome_page', $data);
        } else {
            $post = $this->input->post();
            $userData = array(
                'emailId' => $post['email'],
                'password' => base64_encode($post['password']),
                'status' => '1',
            );

            $insert = $this->gm->insert('users', $userData);
            if (!empty($insert)) {
                $this->session->set_flashdata('success', 'Account created successfully');
                return redirect(base_url());
            } else {
                $this->session->set_flashdata('LoginFailed', 'ooppssss!!...Something gone wrong, Please try after sometime ');
                return redirect(base_url());
            }
        }
    }

}