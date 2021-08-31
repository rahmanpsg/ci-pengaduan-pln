<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, DELETE, PUT');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization');
header('Access-Control-Allow-Credentials: true');
header('Content-Type: application/json');

defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Api extends RestController
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model');
        $this->db->query("SET sql_mode = '' ");
    }

    public function login_post()
    {
        $username = $this->post('username');
        $password = $this->post('password');

        if ($username === null || $password === null) {
            $this->response(['message' => 'Akses ditolak'], 504);
        }

        $this->db->select('level');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $cek = $this->db->get('tbl_user');

        if ($cek->num_rows() > 0) {
            $data = $cek->result()[0];
            $session = ['hasLogin' => true, 'level' => $data->level, 'username' => $username];
            $this->session->set_userdata($session);
            $this->response(['error' => false, 'message' => "Anda berhasil login", 'level' => $data->level], 200);
        }

        $this->response(['error' => true, 'message' => 'Username atau password salah'], 200);
    }
    // ---------------------------------------------------------------------------------------------------------------------
    public function pelanggan_get()
    {
        $id = $this->get('id');

        if ($id === null) {
            $data = $this->db->get('tbl_pelanggan')->result();
            $this->response($data, 200);
        }

        $data = $this->db->get_where('tbl_pelanggan', ['id' => $id]);

        if ($data->num_rows() > 0) {
            $this->response($data->result()[0], 200);
        }

        $this->response(['error' => true, 'message' => 'ID Pelanggan tidak ditemukan'], 200);
    }
    public function pelanggan_post()
    {
        foreach ($_POST as $key => $val) {
            $data[$key] = $val;
        }

        if (strlen($data['id']) < 11) {
            $this->response(['error' => true, 'message' => 'ID Pelanggan minimal 11 angka'], 202);
        }

        if (!preg_match("/^[0-9|(\+|)]*$/", $data['telp']) > 0) {
            $this->response(['error' => true, 'message' => 'Nomor Telpon hanya boleh menggunakan angka'], 202);
        }

        if (strlen($data['telp']) < 11) {
            $this->response(['error' => true, 'message' => 'Nomor Telpon minimal 11 angka'], 202);
        }

        // Cek ID Pelanggan
        $cek = $this->Model->cekData('tbl_pelanggan', ['id' => $data['id']]);

        if ($cek > 0) {
            $this->response(['error' => true, 'message' => 'ID Pelanggan telah digunakan'], 202);
        }

        $simpan = $this->db->insert('tbl_pelanggan', $data);

        if ($simpan) {
            $this->response(['error' => false, 'message' => 'Data berhasil disimpan', 'data' => $data], 200);
        }
        $this->response(['error' => true, 'message' => 'Data gagal disimpan'], 200);
    }
    public function updatePelanggan_post()
    {
        foreach ($_POST as $key => $val) {
            if ($key !== 'where') {
                $data[$key] = $val;
            }
        }
        $where = ['id' => $this->post('where')];

        if (strlen($data['id']) < 11) {
            $this->response(['error' => true, 'message' => 'ID Pelanggan minimal 11 angka'], 202);
        }

        if (!preg_match("/^[0-9|(\+|)]*$/", $data['telp']) > 0) {
            $this->response(['error' => true, 'message' => 'Nomor Telpon hanya boleh menggunakan angka'], 202);
        }

        if (strlen($data['telp']) < 11) {
            $this->response(['error' => true, 'message' => 'Nomor Telpon minimal 11 angka'], 202);
        }

        // Cek ID Pelanggan
        if ($data['id'] !== $this->post('where')) {
            $cek = $this->Model->cekData('tbl_pelanggan', ['id' => $data['id']]);

            if ($cek > 0) {
                $this->response(['error' => true, 'message' => 'ID Pelanggan telah digunakan'], 202);
            }
        }

        $update = $this->db->update('tbl_pelanggan', $data, $where);

        if ($update) {
            $this->response(['error' => false, 'message' => 'Data berhasil diubah', 'data' => $data], 200);
        }
        $this->response(['error' => true, 'message' => 'Data gagal diubah'], 200);
    }
    public function hapusPelanggan_post()
    {
        $id = $this->post('id');

        if ($id === null) {
            $this->response(['message' => 'Akses ditolak'], 504);
        }

        $hapus = $this->db->delete('tbl_pelanggan', ['id' => $id]);

        if ($hapus) {
            $this->response(['error' => false, 'message' => 'Data berhasil dihapus'], 200);
        }
        $this->response(['error' => true, 'message' => 'Data gagal dihapus'], 200);
    }
    // ---------------------------------------------------------------------------------------------------------------------
    public function pengaduan_get()
    {
        $this->db->select('a.*, b.nama nama_pelanggan, c.nama nama_petugas');
        $this->db->from('tbl_pengaduan a');
        $this->db->join('tbl_pelanggan b', 'a.id_pelanggan = b.id', 'left');
        $this->db->join('tbl_user c', 'a.username_petugas = c.username', 'left');
        $get = $this->db->get()->result();

        $data = array_map(function ($v) {
            if ($v->status == NULL) {
                $v->status = 'Belum dikonfirmasi';
            }
            $v->lokasi = json_decode($v->lokasi);
            return $v;
        }, $get);

        $this->response($data, 200);
    }
    public function pengaduan_post()
    {
        $id = $this->post('id');
        $nama = $this->post('nama');
        $telp = $this->post('telp');
        $pengaduan = $this->post('pengaduan');
        $lokasi = $this->post('lokasi');
        $latitude = $this->post('latitude');
        $longitude = $this->post('longitude');

        $idPengaduan = 'pgd-' . $this->Model->getRandomStr(10);

        $simpan = $this->db->insert('tbl_pengaduan', ['id' => $idPengaduan, 'id_pelanggan' => $id, 'nama' => $nama, 'telp' => $telp, 'pengaduan' => $pengaduan, 'lokasi' => json_encode(['lokasi' => $lokasi, 'latitude' => $latitude, 'longitude' => $longitude])]);

        if ($simpan) {
            $this->response(['error' => false, 'message' => "Pengaduan anda telah berhasil dikirimkan <p>(ID Pengaduan <strong>{$idPengaduan}</strong>)</p>"], 200);
        }

        $this->response(['error' => true, 'message' => 'Pengaduan gagal disimpan'], 200);
    }
    public function aksiPengaduan_post()
    {
        $id = $this->post('id');
        $username = $this->post('username');
        $status = $this->post('status');
        $file = $this->post('file');

        $this->db->set('history');
        $prevHistory = $this->db->get_where('tbl_pengaduan', ['id' => $id])->result()[0]->history;

        $history = json_decode($prevHistory);

        if ($prevHistory) {
            $history->$status = $this->Model->getWaktu();
        } else {
            $history[$status] = $this->Model->getWaktu();
        }

        if ($file !== null) {
            $filePath = APPPATH . "/../laporan/{$id}/";

            if (!file_exists($filePath)) {
                mkdir($filePath, 0777, true);
            }

            if (preg_match("/^data:image\/(?<extension>(?:png|gif|jpg|jpeg));base64,(?<image>.+)$/", $file, $matchings)) {
                $imageData = base64_decode($matchings['image']);
                // $extension = $matchings['extension'];
                $filename = sprintf("laporan.%s", 'png');

                if (!file_put_contents($filePath . $filename, $imageData)) {
                    $this->response(['error' => true, 'message' => 'File gagal diupload']);
                }
            }
        }

        if ($username !== null) {
            $this->db->set('username_petugas', $username);
        }

        $this->db->set(['status' => $status, 'history' => json_encode($history)]);
        $this->db->where('id', $id);
        $update = $this->db->update('tbl_pengaduan');

        if ($update) {
            $text = $status == 'Diterima & dalam pengerjaan' ? 'dikonfirmasi' : 'diselesaikan';
            $this->response(['error' => false, 'message' => "Pengaduan {$id} berhasil {$text}", 'history' => json_encode($history)], 200);
        }

        $this->response(['error' => true, 'message' => "Pengaduan {$id} gagal {$text}"], 200);
    }
    // ---------------------------------------------------------------------------------------------------------------------   
    public function petugas_get()
    {
        $this->db->select("username, nama, data, foto");
        $get = $this->db->get_where('tbl_user', ['level' => 'petugas'])->result();

        $data = array_map(function ($v) {
            $v->data = json_decode($v->data);
            return $v;
        }, $get);

        $this->response($data, 200);
    }
    public function petugas_post()
    {
        ['username' => $username, 'nama' => $nama, 'password' => $password, 'jenis_kelamin' => $jk, 'alamat' => $alamat, 'telp' => $telp] = $_POST;

        //cek Duplicate Username
        $cek = $this->Model->cekData('tbl_user', ['username' => $username]);

        if ($cek > 0) {
            $this->response(['error' => true, 'message' => 'Username telah digunakan'], 202);
        }

        if (strlen($password) < 6) {
            $this->response(['error' => true, 'message' => 'Password harus lebih dari 6 karakter'], 202);
        }

        $data = [
            'username' => $username,
            'nama' => $nama,
            'password' => $password,
            'level' => 'petugas',
            'data' => json_encode(['jenis_kelamin' => $jk, 'alamat' => $alamat, 'telp' => $telp])
        ];

        $simpan = $this->db->insert('tbl_user', $data);

        if ($simpan) {
            $data['data'] = json_decode($data['data']);
            $this->response(['error' => false, 'message' => 'Data petugas berhasil disimpan', 'data' => $data], 200);
        }

        $this->response(['error' => true, 'message' => 'Data petugas gagal disimpan'], 200);
    }
    public function updatePetugas_post()
    {
        ['where' => $defaultUsername, 'username' => $username, 'nama' => $nama, 'password' => $password, 'jenis_kelamin' => $jk, 'alamat' => $alamat, 'telp' => $telp] = $_POST;

        $data = [
            'username' => $username,
            'nama' => $nama,
            'password' => $password,
            'data' => json_encode(['jenis_kelamin' => $jk, 'alamat' => $alamat, 'telp' => $telp])
        ];

        //cek Duplicate Username
        if ($defaultUsername !== $username) {
            $cek = $this->Model->cekData('tbl_user', ['username' => $username]);

            if ($cek > 0) {
                $this->response(['error' => true, 'message' => 'Username telah digunakan'], 202);
            }
        }

        if ($password !== '') {
            if (strlen($password) < 6) {
                $this->response(['error' => true, 'message' => 'Password harus lebih dari 6 karakter'], 202);
            }
        } else {
            unset($data['password']);
        }

        $file = $this->post('file');

        if ($file !== null) {
            $data['foto'] = $file;
        }

        $update = $this->db->update('tbl_user', $data, ['username' => $defaultUsername, 'level' => 'petugas']);

        if ($update) {
            if ($this->session->userdata('level') == 'petugas') {
                $this->session->set_userdata(['username' => $username]);
            }

            $data['data'] = json_decode($data['data']);
            $this->response(['error' => false, 'message' => 'Data petugas berhasil diubah', 'data' => $data], 200);
        }

        $this->response(['error' => true, 'message' => 'Data petugas gagal diubah'], 200);
    }
    public function hapusPetugas_post()
    {
        $username = $this->post('username');

        if ($username === null) {
            $this->response(['message' => 'Akses ditolak'], 504);
        }

        $hapus = $this->db->delete('tbl_user', ['username' => $username]);

        if ($hapus) {
            $this->response(['error' => false, 'message' => 'Data berhasil dihapus'], 200);
        }
        $this->response(['error' => true, 'message' => 'Data gagal dihapus'], 200);
    }
    // ---------------------------------------------------------------------------------------------------------------------   
}
