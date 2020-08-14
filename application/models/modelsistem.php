<?php
    Class modelsistem extends CI_Model{


    public function simpan_db(){    
        // $config['upload_path'] = '.assets';
        // $config['allowed_types'] = 'jpg|png|gif';
        // $config['max_size'] = '2048000';
        // $config['file_name'] = url_title($this->input->post('gambar'));
        // $filename = $this->upload->file_name;
        // $this->upload->initialize($config);
        // $this->upload->do_upload('gambar');
        // $data = $this->upload->data();

        $data = array(
            'nik' => $this->input->post('nikk'),
            'nama' => $this->input->post('namaa'),
            'username' => $this->input->post('userr'),
            'password' => ($this->input->post('pass')),
            'telepon' => $this->input->post('telp'),
        );

        $this->db->insert('masyarakat', $data);
        header("Location:".base_url().'Homepage/regis');
    }

    public function get_user()
    {
        $data = $this->db->get('masyarakat');
        return $data->result();
    }
    public function count_user()
    {
        $data = $this->db->get('masyarakat');
        return $data->num_rows();
    }

    public function cek_login($table, $where){
        return $this->db->get_where($table,$where);
    }
    
    public function update_login($logstat, $usernames){
        $this->db->set('status_login', $log_stat);
        $this->db->where('usernames', $username);
        $this->db->update('loginn');
    }
}    
?>