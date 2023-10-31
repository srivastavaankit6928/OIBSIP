<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('General_model', 'gm');
        $this->load->library('session');

    }

    public function signInAction()
    {
        $post = $this->input->post();

        $condition = array(
            'emailId' => $post['email'],
            'password' => base64_encode($post['password']),
            'status' => '1',
        );
        $userData = $this->gm->fetch_single_data('users', $condition);
        if (!empty($userData)) {
            $this->session->set_userdata('user_id', $userData['userId']);
            $this->session->set_userdata('userName', $userData['userName']);

            return redirect('home');
        } else {
            $this->session->set_flashdata('LoginFailed', 'User Data is invalid');
            return redirect(base_url());
        }
    }


}