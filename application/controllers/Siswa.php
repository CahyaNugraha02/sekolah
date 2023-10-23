<?php
class Siswa extends CI_Controller
{
    public function index()
    {
        $this->load->view('v_form-siswa');
    }
    public function cetak()
    {
        $this->form_validation->set_rules(
            'nis',
            'NIS Siswa',
            'required|min_length[8]',
            [
                'required' => 'NIS Harus diisi',
                'min_length' => 'NIS terlalu pendek'
            ]
        );
        $this->form_validation->set_rules(
            'nama',
            'Nama Siswa',
            'required|min_length[3]',
            [
                'required' => 'Nama Siswa Harus diisi',
                'min_length' => 'Nama terlalu pendek'
            ]
        );
        if ($this->form_validation->run() != true) {
            $this->load->view('v_form-siswa');
        } else {
            $data = [
                'nis' => $this->input->post('nis'),
                'nama' => $this->input->post('nama'),
                'kelas' => $this->input->post('kelas')
            ];
            $this->load->view('v_data-siswa', $data);
        }
    }
}
?>