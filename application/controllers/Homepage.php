<?php

class Homepage extends CI_Controller{

    public function beranda(){
        $data['title'] = "Pengaduan Masyarakat";
        $this->load->view('home', $data);
    }
    public function index(){
        if ($this->session->userdata('status') !='login') {
            redirect('homepage/regis');
        }
        else if ($this->session->userdata('status') =='login') {
            redirect('homepage/home_user');
        }
    }
    public function loginn(){
        if ($this->session->userdata('status') =='login') {
            redirect('homepage/home_user');
        }
    }
    public function login(){
        $this->load->view('l_login');
    }
    
    public function home_user(){
        $data['title'] = "Pengaduan Masyarakat";
        $this->load->view('dashboard_user',$data);
    }
    public function form(){
        $data['title'] = "Pengaduan Masyarakat";
        $this->load->view('form_lapor',$data);
    }
    public function simpan_data(){
        $this->modelsistem->simpan_db();
        $this->load->view('l_login');
    }
    public function __construct(){
        parent::__construct();
        $this->load->model('modelsistem');
    } 
    public function regis(){
        $data['title'] = "Register";
        $data['masyarakat'] = $this->modelsistem->get_user();
        $data['c_masyarakat'] = $this->modelsistem->count_user();
        $this->load->view('register', $data);
    }

    public function aksi_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => $password
        );
        $cek = $this->modelsistem->cek_login("loginn",$where)->num_rows();

        if ($cek > 0) {
            $data_session = array(
                'username' => $username,
                'status' => "login"
        );
        $this->session->set_userdata($data_session);
        if ($this->session->userdata('status') == 'login') {
            header("location:" .base_url(). 'Homepage/home_user');
            // redirect(base_url("Homepage/home_user"));
        }else {
            echo 'Login Gagal';
        }
    }else {
        echo "Username dan Password Salah :";
    }
}

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url('Homepage/loginn'));
    }
}

?>